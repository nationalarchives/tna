<?php
/*
Template Name: Meeting Minutes Landing
*/
get_header();
$current_year = date('Y');
?>

<main id="page_wrap" class="container research-guide-filter">
    <!-- BREADCRUMBS -->
    <?php include 'breadcrumb.php'; ?>
    <!--End Breadcrumbs-->

    <!-- content goes here -->
    <div class="row">
        <div class="col starts-at-full box clr">
            <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>
            <div class="heading-holding-banner clr">
                <h1 class="extra-top-padding"><span><span><?php the_title(); ?></span></span></h1>
            </div>
            <!-- end heading-holding-banner -->
            <div class="breather no-left-right-padding">
                <div class="col starts-at-full ends-at-two-thirds clr">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; else : ?>
                    <p><?php _e('Sorry, no content.'); ?></p>
                <?php endif; ?>
                <!-- end col -->
                <div class="width-one-third float-right banner-category banner-category-foreigncolonial">
            </div>
        </div>
        <!-- end breather -->
    </div>
    <!-- end col -->
    </div><!-- end row -->

    <!-- START MAIN CONTENT -->
    <div class="row content-area"><!--main content row -->
        <div class="col starts-at-full ends-at-full box clr">
            <div class="heading-holding-banner">
                <h2 class="section-heading"><span><span><?php echo $current_year; ?></span></span></h2>
            </div>
            <div class="breather no-left-right-padding">
                <div class="grid-within-grid-two-item clr">
                    <?php
                    $minutes_id = get_the_ID();

                    if (get_query_var('paged')) $paged = get_query_var('paged');
                    if (get_query_var('page')) $paged = get_query_var('page');

                    $query = new WP_Query(array(
                            'post_type' => 'page',
                            'paged' => $paged,
                            'post_parent' => $minutes_id,
                            'meta_value' => $current_year,
                            'posts_per_page' => -1,
                            'orderby' => 'menu_order date'
                        )
                    );

                    if ($query->have_posts()) :
                        ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="hierarchy">
                            <div>
                                <div class="border-bottom">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div>
                                    <ul role="navigation">
                                  <li>
                                      <?php $file_url = get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true); ?>
                                    <span class=" text-smallest
                                    ">
                                    <a href="<?php echo get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true); ?>"
                                       target="_blank">
                                        Download</a>
                                    (PDF, <?php echo get_post_meta($post->ID, "pdf_file_size_pdf_file_size", true); ?>
                                    MB)
                                    </span>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    else:
                        ?>
                        <p>No meeting minutes available for this year</p>
                    <?php endif;
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row content-area">
        <div class="col starts-at-full ends-at-one-third box clr">
            <div class="heading-holding-banner">
                <h2 class="section-heading">
          <span>
            <span><?php echo $current_year - 1; ?></span>
          </span>
                </h2>
            </div>
            <div class="breather no-left-right-padding">
                <?php
                $minutes_id = get_the_ID();

                if (get_query_var('paged')) $paged = get_query_var('paged');
                if (get_query_var('page')) $paged = get_query_var('page');

                $query = new WP_Query(array(
                        'post_type' => 'page',
                        'paged' => $paged,
                        'post_parent' => $minutes_id,
                        'meta_value' => $current_year - 1,
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order date'
                    )
                );

                if ($query->have_posts()) :
                    ?>
                    <details class="accordion">
                        <summary>Select a month</summary>

                        <div class="accordion-content">
                            <ul role="navigation" class=" full
                            ">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <li>
                                    <a href="<?php echo get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true); ?>"
                                       target="_blank"><?php the_title(); ?></a>
                                    (PDF, <?php echo get_post_meta($post->ID, "pdf_file_size_pdf_file_size", true); ?>
                                    MB)

                                </li>
                            <?php endwhile; ?>
                            </ul>
                            <div class="clear-both"></div>
                        </div>
                    </details>
                <?php else: ?>
                    <p>No meeting minutes available for this year</p>
                <?php endif;
                wp_reset_query(); ?>
            </div>

        </div>
        <div class="col starts-at-full ends-at-one-third box clr">
            <div class="heading-holding-banner">
                <h2 class="section-heading">
          <span>
            <span><?php echo $current_year - 2; ?></span>
          </span>
                </h2>
            </div>
            <div class="breather no-left-right-padding">
                <?php
                $minutes_id = get_the_ID();

                if (get_query_var('paged')) $paged = get_query_var('paged');
                if (get_query_var('page')) $paged = get_query_var('page');

                $query = new WP_Query(array(
                        'post_type' => 'page',
                        'paged' => $paged,
                        'post_parent' => $minutes_id,
                        'meta_value' => $current_year - 2,
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order date'
                    )
                );

                if ($query->have_posts()) :
                    ?>
                    <details class="accordion">
                        <summary>Select a month</summary>

                        <div class="accordion-content">
                            <ul role="navigation" class=" full
                            ">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <li>
                                    <a href="<?php echo get_post_meta($post->ID, "pdf_meetings_url_meeting_url", true); ?>"
                                       target="_blank"><?php the_title(); ?></a>
                                    (<?php echo get_post_meta($post->ID, "pdf_file_size_pdf_file_size", true); ?> MB)

                                </li>
                            <?php endwhile; ?>
                            </ul>
                            <div class="clear-both"></div>
                        </div>
                    </details>
                <?php else: ?>
                    <p>No meeting minutes available for this year</p>
                <?php endif;
                wp_reset_query(); ?>
            </div>
        </div>
        <div class="col starts-at-full ends-at-one-third box clr">
            <div class="heading-holding-banner">
                <h2 class="section-heading">
          <span>
            <span>Previous minutes</span>
          </span>
                </h2>
            </div>
            <div class="breather no-left-right-padding">
                <p><?php echo html_entity_decode(get_post_meta($post->ID, 'previous_minutes_type_content_here', true)); ?></p>

            </div>
        </div>
    </div>

    <!-- END MAIN CONTENT -->
</main>
<?php get_footer(); ?>
<script>
    $('.accordion h3 a').on('click', function(e) {e.preventDefault()});
</script>
