<?php
/*
Template Name: Education - Studies
*/
get_header(); ?>
<?php if ( is_singular() && has_post_thumbnail( $post->ID )) :
   $thumb_id = get_post_meta($post->ID, '_thumbnail_id', true);
   $thumb_url = wp_get_attachment_url($thumb_id); ?>
<style type="text/css">
#content-banner {
	background-image: url("<?php echo $thumb_url ;?>");
}
</style>
<?php endif;?>

<div id="page_wrap" class="container" role="main"> 
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <?php 
	
	if ( have_posts() ) : 
	
	
	?>
  <?php while ( have_posts() ) : the_post(); ?>
  
  <!-- content goes here --> 
  <a name="top"></a>
  <div class="row">
    <div class="col starts-at-full ends-at-two-thirds box clr">
      <div id="content-banner" class="image-container small position-relative pad-top-medium">
        <h1 class="margin-none"><span><span>
          <?php the_title(); ?>
          </span></span></h1>
      </div>
      <div class="breather clr">
        <?php the_content(); ?>
        <?php if(get_field('button-text')): ?>
        <a href="<?php the_field('button-url'); ?>" class="button float-right">
        <?php the_field('button-text'); ?>
        </a>
        <?php endif; ?>
      </div>
    </div>    <?php if (get_field('related-resources')){?>
    <div class="col starts-at-full ends-at-one-third clr box"> 
      <!-- related resources -->
      <div class="heading-holding-banner">
        <h2> <span> <span>Related studies</span> </span> </h2>
      </div>
      <div class="breather">
        <?php
		$post_objects = get_field('related-studies');
 
		if( $post_objects ): ?>
        <div class="pictorial-list grid-within-grid-one-item">
          <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); 
          $image_url = wp_get_attachment_image_src( get_post_thumbnail_id());?>
          <div class="resource-block margin-bottom-small">
          <a href="<?php the_permalink(); ?>"><div style="background-image: url(<?php echo $image_url[0] ?>)"></div>
            <h3 class="margin-bottom-small">
              <?php the_title(); ?>
            </h3>
            </a>
            <p>
              <?php
             if (get_field('subheading')){
            
             echo ($resourcequestion);
             }else{
               
            if (has_excerpt()){the_excerpt();}   
             }
             ?></p></div>
          <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
      </div>
    </div><?php }?>
  </div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>
