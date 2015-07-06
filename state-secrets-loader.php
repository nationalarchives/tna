<?php
/*
Template Name: State Secrets Documents

*/
 
?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); 
  $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_image_src($image_id,'full', false); 


    include 'inc/state-secrets/inc-document-loader.php';
 endwhile; ?>
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/css/minisite-state-secrets.css">