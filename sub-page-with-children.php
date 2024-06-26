<?php
/*
Template Name: Sub-section page with children
*/

get_header(); ?>


<div id="page_wrap" class="container" role="main">

    <!-- Breadcrumbs -->
    <?php include 'breadcrumb.php'; ?>

    <!-- Page content -->
    <div class="row">
        <div class="col starts-at-full ends-at-full box clr">
            <div class="heading-holding-banner">
                <h1>
            <span>
                <span>
                    <?php the_title(); ?>
                </span>
            </span>
                </h1>
            </div>
            <div class="breather no-left-right-padding">
                <div class="col starts-at-full ends-at-two-thirds clr">
                <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif;
                ?>
                </div>

                <?php

                // Check to see if ACFs are enabled before displaying ACF content
                if ( function_exists( 'get_field' ) ) { ?>
                    <div class="col starts-at-full ends-at-one-third clr feature-box">
                        <div class="breather no-border">
                            <?php the_field('feature-box'); ?>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <div class="row" id="index">
        <?php
      $page_id = (isset($GLOBALS['tnatheme']) && $GLOBALS['tnatheme']['ischildsite'] && is_front_page() ? 0 : get_the_ID());
        //$page_id = get_the_ID(); //Gets the id for the current page.

        // loop through the sub-pages for the current page.
		$idObj = get_category_by_slug('exclude-from-parent');
        $exclude_id = $idObj->term_id;
        $childpages = new WP_Query(array(
                'post_type' => 'page',
                'post_parent' => $page_id,
                'posts_per_page' => -1,
                'post__not_in'   => array(get_option('page_on_front')),
                'orderby' => 'menu_order date',
                'category__not_in' => $exclude_id,
                'order' => 'ASC'
            )
        );

        while ($childpages->have_posts()) : $childpages->the_post();

            ?>

            <div class="col starts-at-full ends-at-half clr box">
                <div class="heading-holding-banner">
                    <h2 class="section-heading"><span>
                  <span>
                      <a href="<?php echo fix_internal_url(get_page_link()); ?>">
                          <?php the_title(); ?>
                      </a>
                  </span>
              </span>
                    </h2>
                </div>
                <div class="breather no-left-right-padding">
                    <?php
                    $image_id = get_post_thumbnail_id(get_the_ID());
                    $image_url = wp_get_attachment_image_src($image_id, '', false);

                    if ($image_url) {
                        ?>
                        <a href="<?php echo fix_internal_url(get_page_link(get_the_ID())) ?>" title="<?php echo get_the_title() ?>">
                            <div class="starts-at-full ends-at-half thumbnail-container-lrg mb-24"
                                 style="background-image: url(<?php echo(fix_internal_url($image_url[0])); ?>); background-repeat: no-repeat">
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                    <?php //echo first_sentence(get_the_content());
                    if (has_excerpt($post->ID)) {
                        echo the_excerpt();
                    } else {
                        echo "<p>" . first_sentence(get_the_content()) . "</p>";
                    }
                    ?>
                    <?php
                    $child_page_id = get_the_ID();
                    if ( defined("EXCLUDE_FROM_INDEX_PAGE")) {
                        $exclude = -EXCLUDE_FROM_INDEX_PAGE;
                    } else {
                        $exclude = null;
                    }
                    // loop through the sub-pages for each child page as grandchildren.
                    $grandchildrenpages = new WP_Query(array(
                            'post_type' => 'page',
                            'post_parent' => $child_page_id,
                            'posts_per_page' => -1,
                            'cat' => $exclude,
                            'orderby' => 'menu_order date',
                            'order' => 'ASC'
                        )
                    );
                    if ($grandchildrenpages->have_posts()):?>
                        <ul class="child">
                            <?php
                            while ($grandchildrenpages->have_posts()) : $grandchildrenpages->the_post();
                                ?>
                                <li class="page_item">
                                    <a href="<?php echo fix_internal_url(get_page_link()); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                            <?php endwhile;
                            wp_reset_query(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>

    </div>

</div>
</div>
<!-- end page content -->
<?php get_footer(); ?>


