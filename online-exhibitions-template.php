<?php


get_header();

/* Enable feature image for the banner */
$thumb_id = get_post_thumbnail_id($post->ID);
$thumb_url_array = wp_get_attachment_image_src($thumb_id, '', true);
$thumb_url = $thumb_url_array[0];

?>

    <section class="online-exhibitions">
        <!-- Featured Image -->
        <?php $featureImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>

        <div class="row  small">
            <div class="banner">
                <div class="container">
                    <div class="row" id="holds-breadcrumb">
                        <div class="col starts-at-half clr online-exhibitions-breadcrumb">
                            <!-- Breadcrumbs -->
                            <?php include 'breadcrumb.php'; ?>
                        </div>
                    </div>
                    <div class="col starts-at-full clr">
                        <div class="transbox">
                            <h1>Online exhibitions</h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="page_wrap" class="container online-exhibitions" role="main">
        <div class="clr">
            <div class="filter-bg">
                <div class="row">

                    <div class="col starts-at-full ends-at-full">
                        <div class="breather clr">

                            <?php
                            $sorted = filter_input(INPUT_GET, 'sorted-by', FILTER_SANITIZE_SPECIAL_CHARS);
                            $grid = filter_input(INPUT_GET, 'grid', FILTER_SANITIZE_SPECIAL_CHARS);
                            ?>

                            <div class="float-left">

                                <form id="formOnlineExhibitions" method="get">
                                    <fieldset>
                                        <legend>Sorted by:</legend>
                                    
                                        <div class="exhibitions-form-group">
                                        <input id="latest" type="radio" name="sorted-by"
                                            value="latest" <?php if ($sorted != "a-z-by-title") {
                                            echo "checked='checked'";
                                        } ?>>
                                        <label for="latest">Latest</label>
                                    </div>
                                    <div class="exhibitions-form-group">
                                    <input id="a-z" type="radio" name="sorted-by"
                                           value="a-z-by-title" <?php if ($sorted == "a-z-by-title") {
                                        echo "checked='checked'";
                                    } ?>>
                                    <label for="a-z">A-Z by title</label>
                                    </div>
                                    </fieldset>

                                    <div class="exhibitions-form-group float-right">
                                    <label for="grid-view">
                                        Show list view</label>
                                    <input type="checkbox" id="grid-view" name="grid"
                                           value="list" <?php if ($grid == "list") {
                                        echo "checked='checked'";
                                    } ?>">
                                    </div>
                                    <div>
                                        <noscript>
                                            <input type="submit" value="Update">
                                        </noscript>
                                    </div>
                                </form>
                            </div>
                            <!-- end float-left -->
                        </div>
                    </div>

                </div>
                <!--end breather -->
            </div>
            <!--end select-float -->
        </div>
        <div id="index" class="row">
            <?php

            $sorted = filter_input( INPUT_GET, "sorted-by", FILTER_SANITIZE_FULL_SPECIAL_CHARS );
            $empty = filter_input( INPUT_GET, "/", FILTER_SANITIZE_FULL_SPECIAL_CHARS );
            $grid = filter_input( INPUT_GET, "grid", FILTER_SANITIZE_FULL_SPECIAL_CHARS );


            if ($sorted == "latest") {
                $orderby = "date";
            }
            if ($empty == null) {
                $orderby = "date";
            }
            if ($sorted == "a-z-by-title") {
                $orderby = "title";
                $order = "ASC";
            }

            $onlineExhibitions = new WP_Query(array(
                'post_type' => 'online-exhibitions',
                'order' => $order,
                'orderby' => $orderby,
                'posts_per_page' => -1,
            ));

            ?>

            <?php
            if ($onlineExhibitions->have_posts()) :
                while ($onlineExhibitions->have_posts()) :
                    $onlineExhibitions->the_post()
                    ?>
                    <?php if ($grid == "list" and $sorted == 'latest' || $sorted == 'a-z-by-title') { ?>
                    <div class="load_more col starts-at-full ends-at-full box online-exhibitions-card">
                        <?php get_template_part('inc/online-exhibitions-template-part', 'page'); ?>
                    </div>
                <?php } else { ?>
                    <div class="load_more col starts-at-full ends-at-one-third box online-exhibitions-card">
                        <?php get_template_part('inc/online-exhibitions-template-part', 'page'); ?>
                    </div>
                <?php } ?>

                    <?php
                endwhile; endif;
            wp_reset_query();
            ?>
        </div>
    </div>
    <!-- end page content -->
<?php get_footer(); ?>
