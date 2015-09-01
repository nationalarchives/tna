<?php
/*
Template Name: Meeting Landing Page
*/
get_header(); ?>

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
            <div class="heading-holding-banner clr">
                <h1><span><span><?php the_title() ;?></span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">
                <div class="col starts-at-full ends-at-two-thirds clr">
                    <?php echo the_excerpt(); ?>
                </div><!-- end col -->
                <div class="class="width-one-third float-right banner-category banner-category-foreigncolonial">
                <div class="breather">
                    <div>
                        <img src="<?php echo get_bloginfo('template_directory');?>/images/meeting-minutes/half_clock.png" class="size-full wp-image-4469 banner-over-box">
                    </div>
                    <div class="sprite icon-img-desc position-top-right wp-image-4469 eye-box">
                        <div class="image-description" id="home-img-desc" style="z-index: 100px;">
                            Whitstable, 1905. Catalogue reference: COPY 1/228 (98)
                            <a href="#" title="Image of Whitstable, 1905. Catalogue reference: COPY 1/228 (98) Catalogue reference: View in image library">
                                View in image library
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
                <h2><span><span>2015</span></span></h2>
            </div>
            <div class="breather">
                <div class="grid-within-grid-two-item clr">
                    <?php
                        $minutes_id = get_the_ID();

                        if ( get_query_var('paged') ) $paged = get_query_var('paged');
                                if ( get_query_var('page') ) $paged = get_query_var('page');

                                 $query = new WP_Query( array( 'post_type' => 'page',
                                                               'paged' => $paged,
                                                               'orderby' => 'date',
                                                               'post_parent' => $minutes_id
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
                                      <a href="<?php echo get_post_meta($post->ID, "pdf_link_pdf_link", true); ?>" target="_blank">
                                          Download PDF (<?php echo get_post_meta($post->ID, "pdf_link_pdf_file_size", true); ?> MB)
                                      </a>
                                  </li>
                               </ul>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                         else:
                    ?>
                    <h3>No meeting minutes found</h3>
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
            <span>2014</span>
          </span>
                </h2>
            </div>
            <div class="breather">
                <div class="accordion">
                    <h3 class="toggle">Select a month</h3>
                    <div style="display: none;" class="accordion-content">
                        <ul class="full">
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_january', true); ?>" target="_blank">January 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_february', true); ?>" target="_blank">February 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_march', true); ?>" target="_blank">March 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_april', true); ?>" target="_blank">April 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_may', true); ?>" target="_blank">May 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_june', true); ?>" target="_blank">June 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_july', true); ?>" target="_blank">July 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_august', true); ?>" target="_blank">August 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_september', true); ?>" target="_blank">September 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_october', true); ?>" target="_blank">October 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_november', true); ?>" target="_blank">November 2014</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_1_december', true); ?>" target="_blank">December 2014</a></li>
                        </ul>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col starts-at-full ends-at-one-third box clr">
            <div class="heading-holding-banner">
                <h2>
          <span>
            <span>2013</span>
          </span>
                </h2>
            </div>
            <div class="breather">
                <div class="accordion">
                    <h3 class="toggle">Select a month</h3>
                    <div style="display: none;" class="accordion-content">
                        <ul class="full">
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_january', true); ?>" target="_blank">January 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_february', true); ?>" target="_blank">February 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_march', true); ?>" target="_blank">March 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_april', true); ?>" target="_blank">April 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_may', true); ?>" target="_blank">May 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_june', true); ?>" target="_blank">June 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_july', true); ?>" target="_blank">July 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_august', true); ?>" target="_blank">August 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_september', true); ?>" target="_blank">September 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_october', true); ?>" target="_blank">October 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_november', true); ?>" target="_blank">November 2015</a></li>
                            <li><a href="<?php echo get_post_meta($post->ID, 'archive_2_december', true); ?>" target="_blank">December 2015</a></li>
                        </ul>
                        <div class="clear-both"></div>
                    </div>
                </div>
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
                <p><?php echo get_post_meta($post->ID, 'previous_minutes_type_content_here', true); ?></p>
            </div>
        </div>
    </div>

    <!-- END MAIN CONTENT -->
</main>
<?php get_footer(); ?>
