<?php
/*
Template Name: Education Bundle Document Viewer
*/

get_header(); ?>
<div id="page_wrap" class="container" role="main">
<!-- Breadcrumbs -->
<?php include 'breadcrumb.php'; ?>

	<?php 
	
	if ( have_posts() ) : 
	
	
	?>

		    <?php
/*
Credits:
Snippet by Laurence Lord (http://laurencelord.co.uk)
extends Wordpress Codex (http://codex.wordpress.org/Next_and_Previous_Links).
Credit goes to Rory Powis (https://github.com/rpowis) for the lambdase.
*/
 
$ancestors = get_post_ancestors( $post->ID );
/* Get the top Level page->ID count base 1, array base 0 so -1 */
$parent = ($ancestors) ? $ancestors[0]: $post->ID;
 
$pagelist = get_pages('child_of='. $parent .'&sort_column=menu_order&sort_order=asc');
$pages = array();
foreach ($pagelist as $page) {
$pages[] += $page->ID;
}
 
$current = array_search(get_the_ID(), $pages);
$prevID = ( isset($pages[$current-1]) ) ? $pages[$current-1] : '';
$nextID = ( isset($pages[$current+1]) ) ? $pages[$current+1] : '';
 
?>
 


			<?php while ( have_posts() ) : the_post(); ?>
    
    <!-- content goes here -->
    
    <div class="row">
    <div class="col starts-at-full ends-at-full box clr">
<div class="heading-holding-banner">
    <h1><span><span><?php the_title(); ?></span></span></h1>
      </div>     
        
    <div class="breather">   
    
      <?php    if ( has_post_thumbnail() ) {?>
      
      <div class="bundle-viewer">
              <?php 
    
     $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
     $large_image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
     $large_image_alt = ($large_image_alt ? $large_image_alt : "Full image of " . the_title_attribute('echo=0'));

 echo '<a href="' . $large_image_url[0] . '" title="' . $large_image_alt . '" target="_blank" >';
   the_post_thumbnail('full', array('class' => 'bundle-full')); ?>


        <div class="overlay">
          <div class="margin-small clr">
<a href="<?php echo ($large_image_url[0]); ?>" title="Full image of <?php echo (the_title_attribute('echo=0'));?>" target="_blank" class="button float-right">View full image</a>
            </div>
        </div>
<?php 
   echo '</a>';
  ?>

<nav id="pagination">
<?php if (!empty($prevID)) { ?>
<div class="bundle-viewer-previous">
<a href="<?php echo get_permalink($prevID); ?>"
title="Go to previous article - <?php echo get_the_title($prevID); ?>" class="previous-page"><img src="<?php bloginfo("stylesheet_directory");?>/images/education/tna-btn-previous.png" border="0" /></a>
</div>
<?php }
if (!empty($nextID)) { ?>
<div class="bundle-viewer-next">
<a href="<?php echo get_permalink($nextID); ?>"
title="Go to next article - <?php echo get_the_title($nextID); ?>" class="next-page"><img src="<?php bloginfo("stylesheet_directory");?>/images/education/tna-btn-next.png" border="0" /></a>
</div>
<?php } ?>
</nav><!-- #pagination -->    

    </div>

<!-- View full image link original location -->

    <?php
	
	
	  }
      ?>

<div class="width-two-thirds"> 


<?php the_content() ?>               
 


<!-- <div id="themed-docs">

<h2>Documents on the same theme</h2>

<ul>

<?php 
        
        query_posts( 'tag=example-theme' );
        
        if ( have_posts() ) while ( have_posts() ) : the_post();
        
            echo '<li><a href="';
            
              the_permalink();
              
            echo '">';

            the_post_thumbnail('thumbnail');

            echo '</a></li>';
            
         endwhile; 
        
        wp_reset_query(); ?>
</ul>
</div> -->

      


</div> <!-- end of centered-text-column -->

   
       <?php 

// This gets the parent page ID 
    $parentid = $post->post_parent;

// This gets the link to the parent page, based on the parent page ID
    $parentpermalink = get_permalink($parentid); ?>
    
 <a class="margin-bottom-medium button float-right" href="<?php echo $parentpermalink; ?>">Return to <?php echo get_the_title($parentid);?></a>       



    
    
    



    </div> 

</div>



</div>

<?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>

