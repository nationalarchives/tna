<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="page_wrap" class="container" role="main"> 
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
    <div class="row">
    <div class="col starts-at-full ends-at-two-thirds">
    
    
  <?php 
	
	if ( have_posts() ) : 
	
	
	?>
  <?php while ( have_posts() ) : the_post(); ?>
  
  <!-- content goes here -->
  
  <div class="row">
    <div class="starts-at-full ends-at-full box clr">
      <div class="heading-holding-banner">
        <h1><span><span>
        <?php if (is_single()){?>
        <?php the_title(); ?>
        <?php } else{?>
         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         <?php }?>
          </span></span></h1>
      </div>
      <div class="breather">
      
      
     <?php    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
	 
	 if ($large_image_url) {
	 
	 ?> 

    <a href="<?php the_permalink(); ?>"> <img src="<?php echo ($large_image_url[0]); ?>" border="0" /></a>
    
    <?php }?>
    
    
        <?php the_content(); ?>
        
         <?php $resourcequestion = "";
      
          if (get_field('subheading')){
      
      $resourcequestion = get_field('subheading'); 
          }
		  
		 echo ($resourcequestion);?>
	
        
        
             <?php if(get_field('section-2')): ?>
        <?php the_field('section-2'); ?>
        <?php endif; ?>
       
<?php if (get_post_type() == "im_guidance_link"){
	
 the_field('guidance-description');
	
}?>
<div class="clear-both"></div>

      </div>
    </div>
 
  </div>   <div class="separator"></div>
  <?php endwhile; ?>
  
  <div class="float-left archive-btn"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="float-right archive-btn"><?php previous_posts_link( 'Newer posts' ); ?></div>
  <?php endif; ?>
  
      
  </div>  
  
      <?php 
	  if (is_single()){


// This gets the parent page ID 
		$parentid = $post->post_parent;
		//echo($parentid);
		
		if  ($parentid == "0" or $parentid != $post->ID){
	  
	  //echo ("Not child");
	  }
		
// This gets the link to the parent page, based on the parent page ID
		$parentpermalink = get_permalink($parentid); ?>

    <div class="col starts-at-full ends-at-one-third clr box">
      <div class="heading-holding-banner">
        <h2> <span> <span> <a name="inThisSection" href="<?php echo $parentpermalink; ?>">Also in <?php echo get_the_title($parentid);?></a></span> </span> </h2>
      </div>
      <div class="breather">
        <div class="sidebar-list">
          <ul class="sibling">
   <?php 
			
		wp_list_pages("title_li=&child_of=$parentid&sort_column=menu_order&depth=1"); 
		
		?>
          </ul>
        </div>
      </div>
    </div>
    
    <?php } ?>
    
          <?php 
	  if (is_category()){

$categories = get_the_category();
$category_id = $categories[0]->cat_ID; ?>
    <div class="col starts-at-full ends-at-one-third clr box">
      <div class="heading-holding-banner">
        <h2> <span> <span> Also in <?php echo (get_cat_name( $category_id )); ?> </span> </span> </h2>
      </div>
      <div class="breather">
        <div class="sidebar-list">
          <ul class="full">
         <?php
$args = array( 'numberposts' => '5','category' => $category_id );
$recent_posts = wp_get_recent_posts( $args );
foreach( $recent_posts as $recent ){
    echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
}
?>
          </ul>
        </div>
      </div>
    </div>
    
    <?php } ?>
    
    
  
  </div>
</div>
<?php get_footer(); ?>
