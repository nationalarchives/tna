<?php
/*
Template Name: Education - Sessions we teach
*/
get_header(); ?>
<?php if ( is_singular() && has_post_thumbnail( $post->ID )) :
   $thumb_id = get_post_meta($post->ID, '_thumbnail_id', true);
   $thumb_url = make_relative_path_from_url(wp_get_attachment_url($thumb_id)); ?>
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
        <div class="sprite icon-img-desc position-top-right">
          <div class="image-description" style="display: block;">
            <?php the_field('banner-image-description'); ?>
          </div>
        </div>
        <div class="overlay">
          <div class="clr link-black">
            <?php if(get_field('document-link')): ?>

           <a href="<?php the_field('document-link'); ?>" class="margin-none" target="_blank" title="Opens in a new window">Download preparation pack</a>
            <?php endif; ?>
            </div>
        </div>
      </div>
      <div class="breather clr no-left-right-padding content-area">
          <h1 class="section-heading"><span><span>
          <?php the_title(); ?>
          </span></span></h1>
       <?php if(get_field('subheading')): ?>

             <h2><?php the_field('subheading'); ?></h2>
                <?php endif; ?>
        <?php the_content(); ?>
      </div>

    </div>
    <div class="col starts-at-full ends-at-one-third clr box pad-none">
      <div class="heading-holding-banner">
        <h2 class="section-heading"><span><span>Session options</span></span></h2>
      </div>
      <div class="breather <?php if(get_field('section-2')): ?>separator<?php endif; ?> clr no-left-right-padding no-top-padding">
      <p>This <a href="/education/teachers/what-we-offer">session</a> is delivered as a:</p>
        <?php if(get_field('session-options-individual-details')): ?>
        <?php while(has_sub_field('session-options-individual-details')): ?>
        <div class="feature-box float-left width-full margin-bottom-large">
          <div class="breather no-left-right-padding">
            <div class="float-left width-full target">
              <strong><?php echo the_sub_field('session-type'); ?></strong><?php echo the_sub_field('session-type-content'); ?>
              <div class="float-left width-one-third">
                <p class="pad-none"><?php echo the_sub_field('session-duration'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
          <!--[if IE 7]><div class="clear"></div><![endif]-->
        <div class="pad-top-large">
          <?php the_field('session-options-global-details'); ?>
          <a href="<?php if (get_field('call-to-action-url')){echo the_field('call-to-action-url');} else { echo "https://www.nationalarchives.gov.uk/contact/contactform.asp?id=14";}  ?>" class="button">
          <?php  if (get_field('call-to-action-text')){ echo the_field('call-to-action-text'); } else { echo "Request a booking"; } ?>
          </a>
        </div>
      </div>
      <?php endif; ?>
       <?php if(get_field('section-2')): ?>
      <div class="heading-holding-banner">
        <h2 class="section-heading"><span><span>Contact us</span></span></h2>
      </div>
      <div class="breather clr <?php if(get_field('related-sessions')): ?>separator<?php endif; ?> no-left-right-padding">
			<p>All activities must be booked in advance.</p>
			<p>Tel: +44 (0)20 8392 5365</p>
			<p>Fax: +44 (0)20 8487 9202</p>
			<p>Email: <a href="mailto:education@nationalarchives.gov.uk">education@nationalarchives.gov.uk</a></p>
	  </div>
      <?php endif; ?>
      <?php if(get_field('related-sessions')): ?>
      <!-- related resources -->
      <div class="heading-holding-banner">
        <h2> <span> <span>Related resources</span> </span> </h2>
      </div>
      <div class="breather">
        <?php
		$post_objects = get_field('related-sessions');

		if( $post_objects ): ?>
          <div class="pictorial-list grid-within-grid-one-item">
          <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post);

		   $resourcequestion = "";

          if (get_field('subheading')){

      $resourcequestion = get_field('subheading');
          }

          $image_url = wp_get_attachment_image_src( get_post_thumbnail_id());?>
          <div class="resource-block margin-bottom-small"><a href="<?php the_permalink(); ?>"><div class="has-background" <?php printf('style="background-image: url(%s)">', $image_url[0]); ?></div>
          <h3 class="margin-bottom-small"><?php the_title();?></h3>
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
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>
