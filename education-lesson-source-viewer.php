<?php
/*
Template Name: Education Lesson Source Viewer
*/

get_header(); ?>
<?php


 if ( is_singular() && has_post_thumbnail( $post->ID )) :
   $thumb_id = get_post_meta($post->ID, '_thumbnail_id', true);
   $thumb_url = make_relative_path_from_url(wp_get_attachment_url($thumb_id));
   $thumb_url_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
   $thumb_full_url = make_relative_path_from_url(wp_get_attachment_url($post->ID, 'full'));
   ?>

<?php endif;?>

<div id="page_wrap" class="container" role="main">
    <!-- row starts -->
    <div class="row">
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <?php
	if ( have_posts() ) :
  ?>
  <?php while ( have_posts() ) : the_post(); ?>

  <!-- content goes here -->




        <div class="col starts-at-full ends-at-two-thirds margin-none clr">

      <div class="heading-holding-banner">
        <h1><span><span>
          <?php the_field('display-title'); ?>
          </span></span></h1>
      </div>
    <!--breather begins -->

            <div class="breather no-left-right-padding">
        <div class="margin-none">


            <?php
            if(have_rows('video')) {?>
<div class="video-main">
  <?php
    require_once('inc/acf-templates/video-player.php');
?>

</div>

                <div class="pad-top-medium">
                    <?php the_content(); ?>
                </div>

                <div class="pad-top-medium pad-bottom-medium">
        <?php the_field('transcript'); ?>
    </div>

<?php   }else{ ?>


		<?php

        // code to show featured image if there is no video

        if ( has_post_thumbnail() ) {?>

          <div id="content-banner" class="margin-bottom-large <?php if(get_field('orientation') && get_field('orientation') == 'portrait')
{ echo "portrait"; } ?><?php if(get_field('orientation') && get_field('orientation') == 'landscape')
{ echo "landscape"; } ?> margin-top-large position-relative pad-small clr"><img src="<?php echo $thumb_url ;?>" data-zoom-image="<?php echo $thumb_full_url ;?>" alt="<?php echo $thumb_url_alt ;?>" />
        <div class="overlay">
          <div class="margin-small clr">
<a href="<?php echo $thumb_url ;?>" target="_blank" class="button">View full size image</a>
            </div>
        </div>
        </div>
          <?php
		 }

        // end of featured image code
?>
            <div class="pad-top-medium">
         <?php the_content(); ?>
            </div>


            <div class="pad-top-medium pad-bottom-medium">
          <?php the_field('transcript'); ?>
            </div>

            <?php }?>


          <?php
			// This gets the parent page ID
			$parentid = $post->post_parent;

			// This gets the link to the parent page, based on the parent page ID
    		$parentpermalink = get_permalink($parentid); ?>
          <a class="button" href="<?php echo $parentpermalink; ?>">&laquo; Return to <?php echo get_the_title($parentid);?></a>
        </div>
                <!--margin none ends -->
            </div>
            <!--breather ends -->
        </div>
        <?php

        // code to show tasks

        if(get_field('task-content')): ?>
        <div class="col starts-at-full ends-at-one-third clr">
          <div class="feature-box margin-top-large">
            <div class="breather">
              <?php the_field('task-content'); ?>
            </div>
          </div>
        </div>
        <?php
        // end of code to show tasks

        endif; ?>


  <?php endwhile; ?>
  <?php endif; ?>
</div>
    <!-- row ends -->
</div>
<?php get_footer(); ?>
