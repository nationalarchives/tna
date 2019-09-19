<?php
/*
Template Name: Video Guides
*/
get_header(); ?>

<div id="page_wrap" class="container" role="main">

  <!-- BREADCRUMBS -->
  <?php include 'breadcrumb.php'; ?>
  <?php

    // Start the Wordpress loop
    if ( have_posts() ) :
    while ( have_posts() ) : the_post();

    // Store the post ID
    $vpost = $post->ID;

  ?>

  <!-- PRIMARY CONTENT -->
  <div class="row">
    <div class="col starts-at-full ends-at-full box clr">
      <div class="heading-holding-banner">
        <h1><span><span><?php the_title(); ?></span></span></h1>
      </div><!-- end heading-holding-banner -->
      <div class="breather no-left-right-padding">
        <div class="video-bg" id="vd">
          <?php the_content(); ?>
        </div><!-- end video-bg -->
        <p>
          <?php

          // If the post excerpt exists, show it
          if ( !empty( $post->post_excerpt ) ) {

            // Show the excerpt
            echo the_excerpt();

          }?>
        </p>

        <?php

        // If the transcript ACF exists...
        if(get_field('transcript')):

        ?>
        <div class="accordion" title="View transcript of  <?php the_title(); ?>">
          <h3 class="toggle">Transcript</h3>
          <div class="accordion-content" style="display: none;">
            <p>
              <?php

              // Show the transcript ACF
              the_field('transcript');

              ?>
            </p>
          </div><!-- end accordion-content -->
        </div><!-- end accordion -->
        <?php endif; ?>
        <h2>
          <?php

            // If this is the video guides page...
            if (is_page('video-guides')){

              // Show this string
              echo ('Video guides');
            }

            // Otherwise...
            else {

              // Show this string
              echo ('More video guides');
            }

          ?>
        </h2>

        <div id="index" class="pictorial-list clr grid-within-grid-three-item">
          <?php

            // Create a new query
            $Vquery = new WP_Query();

            // Build the query
            $Vquery->query('category_name=video-guides&orderby=title&order=asc');

            // Start a loop
            while ($Vquery->have_posts()) : $Vquery->the_post();

            // Store the post thumbail ID and image
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id,'thumbnail', false);

            // If the post is not the current post...
            if ($Vquery->post->ID != $vpost){

          ?>

          <div class="video-box">
            <div class="video-thumb" <?php printf('style="background-image: url(%s)">', $image_url[0]); ?>
              <a href="<?php the_permalink()?>" title="Watch <?php the_title()?>">
                <div class="btn-video-play">
                  <div class="icon-video-play"></div>
                </div><!-- end btn-video-play -->
              </a>
            </div><!-- end video-thumb -->
            <h3 class="pad-none pad-bottom-small">
            <?php

            // Show the title
            the_title()

            ?></h3>

            <?php

              // Show the excerpt
              the_excerpt()

            ?>
          </div><!-- end video-box -->
          <?php

          }

          endwhile;
          wp_reset_query(); ?>
        </div><!-- end pictorial-list -->
      </div><!-- end breather -->
    </div><!-- end col -->
  </div><!-- end row -->


  <?php

  // End the Wordpress loop
  endwhile;
  endif;

  ?>
</div><!-- end page-wrap -->
<?php get_footer(); ?>
