<!-- START related video guides -->

<?php  
  // Check for a value in the related video ACF, and if there is one...
  if (get_field('video-resources')) { 
?>

    <div class="heading-holding-banner">
      <h2> <span> <span>Related video guides</span> </span> </h2>
    </div><!-- end heading-holding-banner -->

    <div class="breather separator">
      
      <?php
        // ...get & store the content of the related video ACF
        $post_video_objects = get_field('video-resources');
        
        // If there is a value stored...
        if ($post_video_objects):
      ?>
      
      <div class="pictorial-list grid-within-grid-one-item">
        
        <?php
          // ...loop over each item in the stored array, override the global post object and get & store the featured image URL 
          foreach ($post_video_objects as $post): // variable must be called $post (IMPORTANT) 
          setup_postdata($post);        
          $image_url = wp_get_attachment_image_src(get_post_thumbnail_id());
        ?>
                     
        <div class="resource-block margin-bottom-small">
          <a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
            <div class="has-background" <?php printf('style="background-image: url(%s)">', make_urls_root_relative($image_url[0])); ?></div><!-- end has-background -->
            <h3 class="margin-bottom-small"><?php the_title(); ?></h3>
          </a>
        </div><!-- end resource-block -->
                
        <?php 
          // Close the $post_video_objects loop
          endforeach; 
        ?> 

      </div><!-- end pictorial-list -->

    <?php 
      // Reset the $post object so the rest of the page works correctly (IMPORTANT)
      wp_reset_postdata();

      // Close the $post_video_objects condition
      endif; 
    ?>
     
    </div><!-- end breather -->

<?php } ?>

<!-- END related video guides -->
