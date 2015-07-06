<?php
/*
Template Name: Education Lesson Source Viewer
*/

get_header(); ?>
<?php 


 if ( is_singular() && has_post_thumbnail( $post->ID )) :
   $thumb_id = get_post_meta($post->ID, '_thumbnail_id', true);
   $thumb_url = wp_get_attachment_url($thumb_id); 
   $thumb_full_url = wp_get_attachment_url($post->ID, 'full');
   ?>

<?php endif;?>

<div id="page_wrap" class="container" role="main"> 
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <?php 	
	if ( have_posts() ) : 
  ?>
  <?php while ( have_posts() ) : the_post(); ?>
  
  <!-- content goes here -->
  
  <div class="row">
    <div class="col starts-at-full ends-at-full box clr">



      <div class="heading-holding-banner">
        <h1><span><span>
          <?php the_field('display-title'); ?>
          </span></span></h1>
      </div>
      <div class="breather">
        <div class="margin-none">
<div class="video-main">
    <?php 
  if(have_rows('video')) {
    require_once('inc/acf-templates/video-player.php');
  }
?>
</div>
          <?php the_content();

     if(!have_rows('video')) {       
      
		 if ( has_post_thumbnail() ) {?></div>
        <div class="col starts-at-full ends-at-two-thirds margin-none clr">
          <div id="content-banner" class="margin-bottom-large <?php if(get_field('orientation') && get_field('orientation') == 'portrait')
{ echo "portrait"; } ?><?php if(get_field('orientation') && get_field('orientation') == 'landscape')
{ echo "landscape"; } ?> margin-top-large position-relative pad-small clr"><img src="<?php echo $thumb_url ;?>" data-zoom-image="<?php echo $thumb_full_url ;?>" alt="" />
        <div class="overlay">
          <div class="margin-small clr">
<a href="<?php echo $thumb_url ;?>" target="_blank" class="button">View full size image</a>
            </div>
        </div>
        </div>
          <?php
		 }
    }
		 ?>
          <?php the_field('transcript'); ?>
          <?php
			// This gets the parent page ID 
			$parentid = $post->post_parent;

			// This gets the link to the parent page, based on the parent page ID
    		$parentpermalink = get_permalink($parentid); ?>
          <a class="button" href="<?php echo $parentpermalink; ?>">&laquo; Return to <?php echo get_the_title($parentid);?></a></div>
        <?php if(get_field('task-content')): ?>
        <div class="col starts-at-full ends-at-one-third clr">
          <div class="feature-box margin-top-large">
            <div class="breather">
              <?php the_field('task-content'); ?>
            </div>
          </div>
        </div>
        <?php endif; ?> 
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
