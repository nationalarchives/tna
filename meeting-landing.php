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
            <div id="breadcrumb"><span class="first"><a href="http://www.nationalarchives.gov.uk">Home</a> &gt; </span><span><span><a href="index.php">About us</a></span></span> &gt; <span><span><a href="title.php">Our role</a></span></span> &gt; <span><span><a href="title.php">Our Executive team</a></span></span>  &gt; <span><span>Meeting minutes and summeries</span></span></div>
        </div><!--end col -->
    </div><!--end row -->
    <!--End Breadcrumbs-->

        <!-- content goes here -->
    <div class="row">
        <div class="col starts-at-full box clr">
            <div class="heading-holding-banner clr">
                <h1><span><span>Meeting minutes and summaries</span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">
                <div class="col starts-at-full ends-at-two-thirds clr">
                    <p>
                        <?php the_content(); ?>
                    </p>
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
                        /*

                        $args = array(
                            'post_type' => 'meeting-minutes',
                            'orderby' => 'ASC'
                        );

                        $the_query = new WP_Query( $args );

                        To be deleted */
                        $minutes_id = get_the_ID();

                        if ( get_query_var('paged') ) $paged = get_query_var('paged');
                                if ( get_query_var('page') ) $paged = get_query_var('page');

                                 $query = new WP_Query( array( 'post_type' => 'page',
                                                               'paged' => $paged,
                                                               'orderby' => 'date',
                                                               'post_parent' => 34188
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
                                      <a href="<?php echo get_post_meta($post->ID, "3_pdf_url", true); ?>" target="_blank">
                                          <?php echo get_the_excerpt(); ?>
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
                    <?php endif; ?>
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
                            <li><a href="#">January 2014</a></li>
                            <li><a href="#">February 2014</a></li>
                            <li><a href="#">March 2014</a></li>
                            <li><a href="#">April 2014</a></li>
                            <li><a href="#">May 2014</a></li>
                            <li><a href="#">June 2014</a></li>
                            <li><a href="#">July 2014</a></li>
                            <li><a href="#">August 2014</a></li>
                            <li><a href="#">September 2014</a></li>
                            <li><a href="#">October 2014</a></li>
                            <li><a href="#">November 2014</a></li>
                            <li><a href="#">December 2014</a></li>
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
            <span>2015</span>
          </span>
                </h2>
            </div>
            <div class="breather">
                <div class="accordion">
                    <h3 class="toggle">Select a month</h3>
                    <div style="display: none;" class="accordion-content">
                        <ul class="full">
                            <li><a href="#">January 2015</a></li>
                            <li><a href="#">February 2015</a></li>
                            <li><a href="#">March 2015</a></li>
                            <li><a href="#">April 2015</a></li>
                            <li><a href="#">May 2015</a></li>
                            <li><a href="#">June 2015</a></li>
                            <li><a href="#">July 2015</a></li>
                            <li><a href="#">August 2015</a></li>
                            <li><a href="#">September 2015</a></li>
                            <li><a href="#">October 2015</a></li>
                            <li><a href="#">November 2015</a></li>
                            <li><a href="#">December 2015</a></li>
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
                <p>See minutes from previous years in our web archieve.</p>
            </div>
        </div>
    </div>

    <!-- END MAIN CONTENT -->
</main>
<?php get_footer(); ?>
