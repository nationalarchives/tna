<?php
/*
Template Name: Meeting Minutes Landing
*/
get_header();
$current_year = date('Y');
?>

<main id="page_wrap" class="container research-guide-filter" role="main">
    <!-- Breadcrumbs -->
    <!-- BREADCRUMBS -->
    <div class="row" id="breadcrumb-holder">
        <div class="col starts-at-full clr">
            <div id="breadcrumb"><?php include 'breadcrumb.php'; ?></div>
        </div><!--end col -->
    </div><!--end row -->
    <!--End Breadcrumbs-->

        <!-- content goes here -->
    <div class="row">
        <div class="col starts-at-full box clr">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="heading-holding-banner clr">
                <h1><span><span><?php the_title(); ?></span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">
                <div class="col starts-at-full ends-at-two-thirds clr">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no content.' ); ?></p>
                <?php endif; ?>
                <!-- end col -->
                <div class="class="width-one-third float-right banner-category banner-category-foreigncolonial">
                <div class="breather">
                    <div>
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/meeting-minutes/half_clock.png" class="size-full wp-image-4469 banner-over-box">
                    </div>
                    <div class="sprite icon-img-desc position-top-right wp-image-4469 eye-box">
                        <div class="image-description" id="home-img-desc" style="z-index: 100px;">
                            <a href="#" title="Image of test, 1905. Catalogue reference: COPY 1/228 (98) Catalogue reference: View in image library">
                                View in image library test
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end breather -->
    </div><!-- end col -->
    </div><!-- end row -->

    <!-- START MAIN CONTENT -->
    <div class="row"><!--main content row -->
        <div class="col starts-at-full ends-at-full box clr">
            <div class="heading-holding-banner">
                <h2><span><span><?php echo $current_year; ?></span></span></h2>
            </div>
            <div class="breather">
                <div class="grid-within-grid-two-item clr">
                    <?php
                    $minutes_id = get_the_ID();

                        if ( get_query_var('paged') ) $paged = get_query_var('paged');
                                if ( get_query_var('page') ) $paged = get_query_var('page');

                                 $query = new WP_Query( array(
                                                        'post_type' => 'page',
                                                        'paged' => $paged,
                                                        'post_parent' => $minutes_id,
                                                        'meta_value' => $current_year,
                                                        'orderby' => 'menu_order date'
                                     )
                                 );

                            if ( $query->have_posts() ) :
                    ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="hierarchy">
                        <div>
                            <div class="border-bottom">
                                    <h3><?php the_title(); ?></h3>
                            </div>
                            <div>
                               <ul class="disc-menu">
                                  <li>
                                      <?php $file_url = get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true); ?>

                                      <a href="<?php echo get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true); ?>" target="_blank">
                                          Download PDF (<?php echo get_post_meta($post->ID, "pdf_file_size_pdf_file_size", true); ?>)
                                      </a>
                                  </li>
                               </ul>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                         else:
                    ?>
                    <p>No meeting minutes found</p>
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col starts-at-full ends-at-one-third box clr">
            <div class="heading-holding-banner">
                <h2>
          <span>
            <span><?php echo $current_year - 1; ?></span>
          </span>
                </h2>
            </div>
            <div class="breather">
                <?php
                    $minutes_id = get_the_ID();

                    if ( get_query_var('paged') ) $paged = get_query_var('paged');
                    if ( get_query_var('page') ) $paged = get_query_var('page');

                    $query = new WP_Query( array(
                            'post_type' => 'page',
                            'paged' => $paged,
                            'post_parent' => $minutes_id,
                            'meta_value' => $current_year - 1,
                            'orderby' => 'menu_order date'
                        )
                    );

                    if ( $query->have_posts() ) :
                ?>
                <div class="accordion">
                    <h3 class="toggle">Select a month</h3>
                    <div style="display: none;" class="accordion-content">

                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <ul class="full">
                            <li>
                               <?php $file_url = get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true);
                               the_title();
                               ?>
                               <a href="<?php echo get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true); ?>" target="_blank">
                                   (<?php echo get_post_meta($post->ID, "pdf_file_size_pdf_file_size", true); ?> MB)
                               </a>
                            </li>

                        </ul>
                        <?php endwhile; ?>
                        <div class="clear-both"></div>
                    </div>
                </div>
                    <? else: ?>
                        <p>No meeting minutes found</p>
                    <?php endif; wp_reset_query(); ?>
            </div>

        </div>
        <div class="col starts-at-full ends-at-one-third box clr">
            <div class="heading-holding-banner">
                <h2>
          <span>
            <span><?php echo $current_year - 2; ?></span>
          </span>
                </h2>
            </div>
            <div class="breather">
                <?php
                $minutes_id = get_the_ID();

                if ( get_query_var('paged') ) $paged = get_query_var('paged');
                if ( get_query_var('page') ) $paged = get_query_var('page');

                $query = new WP_Query( array(
                        'post_type' => 'page',
                        'paged' => $paged,
                        'post_parent' => $minutes_id,
                        'meta_value' => $current_year - 2,
                        'orderby' => 'menu_order date'
                    )
                );

                if ( $query->have_posts() ) :
                    ?>
                    <div class="accordion">
                        <h3 class="toggle">Select a month</h3>
                        <div style="display: none;" class="accordion-content">

                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <ul class="full">
                                    <li>
                                        <?php $file_url = get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true);
                                        the_title();
                                        ?>
                                        <a href="<?php echo get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true); ?>" target="_blank">
                                            (<?php echo get_post_meta($post->ID, "pdf_file_size_pdf_file_size", true); ?>)
                                        </a>
                                    </li>

                                </ul>
                            <?php endwhile; ?>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                <? else: ?>
                    <p>No meeting minutes found</p>
                <?php endif; wp_reset_query(); ?>
            </div>
        </div>
        <div class="col starts-at-full ends-at-one-third box clr">
            <div class="heading-holding-banner">
                <h2>
          <span>
            <span>Previous minutes</span>
          </span>
                </h2>
            </div>
            <div class="breather">
                <p><?php echo html_entity_decode(get_post_meta($post->ID, 'previous_minutes_type_content_here', true)); ?></p>

            </div>
        </div>
    </div>

    <!-- END MAIN CONTENT -->
</main>
<?php get_footer(); ?>
