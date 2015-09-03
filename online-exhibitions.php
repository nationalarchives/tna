<?php


get_header(); ?>

<section class="online-exhibitions">
    <!-- Featured Image -->
    <?php // $featureImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

    <div class="row  small">
        <div class="banner">
            <div class="container">
                <div class="row" id="holds-breadcrumb">
                    <div class="col starts-at-half clr">
                        <!-- Breadcrumbs -->
                        <?php include 'breadcrumb.php'; ?>
                    </div>
                </div>
                <div class="col starts-at-full clr">
                    <div class="transbox">
                        <h1>Online Exhibitions</h1>
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

                <div class="col starts-at-full ends-at-half">
                    <div class="breather clr">
                        <div class="float-left">
                            <label class="margin-top-small margin-bottom-small margin-right-large">Sorted by:</label>
                            <a class="button" href="?sorted=latest"<?php if ($sorted == "latest") ?>>Latest</a>
                            <a class="button" href="?sorted=a-z-by-title"<?php if ($sorted == "a-z-by-title") ?>>A - Z
                                by
                                title</a>
                            <a class="button"
                               href="?sorted=historical-period" <?php if ($sorted == "historical-period") ?>>Historical</a>
                        </div>
                        <!-- end float-left -->
                    </div>
                </div>

                <div class="col starts-at-full ends-at-half">
                    <div class="breather clr float-right">
                        <label class="margin-top-small margin-bottom-small margin-right-large">View page:</label>


                    </div>
                    <!-- end float-right -->
                </div>
            </div>
            <!--end breather -->
        </div>
        <!--end select-float -->
    </div>
    <div id="index" class="row">
        <?php
        /*
        $sorted = $_GET['sorted'];
        if ($sorted == "latest") {
            $order = "orderby=date&order=DESC";
        }
        if ($sorted == "a-z-by-title") {
            $order = "orderby=title&order=ASC";
        }
        if ($sorted == "historical-period") {
            $order = "orderby=menu_order&order=DESC";
        }

        $onlineExhibitions = new WP_Query('post_type=online-exhibitions&' . $order);
        $count = 0;
        if ($onlineExhibitions->have_posts()) :
            while ($onlineExhibitions->have_posts()) :
                $onlineExhibitions->the_post()
        */
        ?>
        <div
            class="col starts-at-full ends-at-half<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
            <div class="breather">
                <a href="#" title="title">
                    <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="wp-content/themes/tna/images/backgrounds/bg-online-exhibitions.jpg"/></div>
                    <div class="overlay width-full">
                        <h2>1901: Living at the time of the census</h2>

                        <p>Find out what life was like in 1901 and learn a about the census and how to discover more
                            about the people and places in it.</p>
                    </div>
                </a>
            </div>
        </div>
        <div
            class="col starts-at-full ends-at-half<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
            <div class="breather">
                <a href="#" title="title">
                    <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="wp-content/themes/tna/images/backgrounds/bg-online-exhibitions.jpg"/></div>
                    <div class="overlay width-full">
                        <h2>1901: Living at the time of the census</h2>

                        <p>Find out what life was like in 1901 and learn a about the census and how to discover more
                            about the people and places in it.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div
            class="col starts-at-full ends-at-one-third<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
            <div class="breather">
                <a href="#" title="title">
                    <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="wp-content/themes/tna/images/backgrounds/bg-online-exhibitions.jpg"/></div>
                    <div class="overlay width-full">
                        <h2>1901: Living at the time of the census</h2>

                        <p>Find out what life was like in 1901 and learn a about the census and how to discover more
                            about the people and places in it.</p>
                    </div>
                </a>
            </div>
        </div>
        <div
            class="col starts-at-full ends-at-one-third<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
            <div class="breather">
                <a href="#" title="title">
                    <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="wp-content/themes/tna/images/backgrounds/bg-online-exhibitions.jpg"/></div>
                    <div class="overlay width-full">
                        <h2>Help with your research</h2>

                        <p>Find out what life was like in 1901 and learn a about the census and how to discover more
                            about the people and places in it.</p>
                    </div>
                </a>
            </div>
        </div>
        <div
            class="col starts-at-full ends-at-one-third<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
            <div class="breather">
                <a href="#" title="title">
                    <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="wp-content/themes/tna/images/backgrounds/bg-online-exhibitions.jpg"/></div>
                    <div class="overlay width-full">
                        <h2>Help with your research</h2>

                        <p>Find out what life was like in 1901 and learn a about the census and how to discover more
                            about the people and places in it.</p>
                    </div>
                </a>
            </div>
        </div>
        <div
            class="col starts-at-full ends-at-one-third<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
            <div class="breather">
                <a href="#" title="title">
                    <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="wp-content/themes/tna/images/backgrounds/bg-online-exhibitions.jpg"/></div>
                    <div class="overlay width-full">
                        <h2>Help with your research</h2>

                        <p>Find out what life was like in 1901 and learn a about the census and how to discover more
                            about the people and places in it.</p>
                    </div>
                </a>
            </div>
        </div>
        <div
            class="col starts-at-full ends-at-one-third<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
            <div class="breather">
                <a href="#" title="title">
                    <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="wp-content/themes/tna/images/backgrounds/bg-online-exhibitions.jpg"/></div>
                    <div class="overlay width-full">
                        <h2>Help with your research</h2>

                        <p>Find out what life was like in 1901 and learn a about the census and how to discover more
                            about the people and places in it.</p>
                    </div>
                </a>
            </div>
        </div>
        <div
            class="col starts-at-full ends-at-one-third<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
            <div class="breather">
                <a href="#" title="title">
                    <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="wp-content/themes/tna/images/backgrounds/bg-online-exhibitions.jpg"/></div>
                    <div class="overlay width-full">
                        <h2>Help with your research</h2>

                        <p>Find out what life was like in 1901 and learn a about the census and how to discover more
                            about the people and places in it.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
    // $count++;
    // endwhile; endif;
    ?>
</div>
</div>
<!-- end page content -->
<?php get_footer(); ?>
