<?php


get_header(); ?>

<style>
    .online-exhibitions {
        height: 455px;
        background:url('wp-content/themes/tna/images/backgrounds/bg-online-exhibitions.jpg') !important;
    }

    .online-exhibitions .transbox {
        margin: 6% 20% 0 20%;
        padding: .5% 1% .5% 1%;
        /* Fallback for web browsers that doesn't support RGBa */
        background: rgb(0, 0, 0) transparent;
        /* RGBa with 0.6 opacity */
        background: rgba(0, 0, 0, 0.6);
        /* For IE 5.5 - 7*/
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        /* For IE 8*/
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
        z-index: 1;
        position: relative;
    }

    .online-exhibitions .transbox h1 {
        color: #ffffff;
        text-align: center;
        margin: 0;
        font-size: 55px;
        padding: 20px 0 20px 0;
    }

    .online-exhibitions .transbox p {
        color: #ffffff;
        text-align: center;
        line-height: 1.8em;
        margin: 0px 0px 0.5em;
    }

    .post-filters {
        margin: 0 8.3333% 8.3333% 8.3333%;
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.15);
        padding: 22px;
        background: #fff;
    }

    .multipleRowsMargin .ends-at-one-third:nth-child(2) {
        margin: 0 0 0 2% !important
    }
</style>

<section>
    <!-- Featured Image -->
    <?php // $featureImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

    <div class="row  small online-exhibitions"
         style="color: rgb(255, 255, 255); background-repeat:no-repeat; background-size:contain;background-position:center;background-size:cover; background-image: url(<?php echo $featureImg['0'] ?>);">
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
</section>
<div id="page_wrap" class="container" role="main">
    <form></form>
    <a href="?sorted=latest"<?php if ($sorted == "latest") ?>>Latest</a>
    <a href="?sorted=a-z-by-title"<?php if ($sorted == "a-z-by-title") ?>>A - Z by title</a>
    <a href="?sorted=historical-period" <?php if ($sorted == "historical-period") ?>>Historical</a>

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
                <div class="col starts-at-full ends-at-half<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
                    <div class="heading-holding-banner">
                        <h2><span><span><a href=""><?php // echo get_the_title(); ?></a> </span></span></h2>
                    </div>
                    <div class="breather">
                        <a href="" title="">
                            <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                                <img src=""/></div>
                        </a>

                        <p>
                            aaasdas
                        </p>
                    </div>
                </div>
                <div class="col starts-at-full ends-at-half<?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
                    <div class="heading-holding-banner">
                        <h2><span><span><a href=""><?php // echo get_the_title(); ?></a> </span></span></h2>
                    </div>
                    <div class="breather">
                        <a href="" title="">
                            <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                                <img src=""/></div>
                        </a>

                        <p>
                            aaasdas
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col starts-at-full ends-at-one-third <?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
                        <div class="heading-holding-banner">
                            <h2><span><span><a href=""><?php // echo get_the_title(); ?></a> </span></span></h2>
                        </div>
                        <div class="breather">
                            <a href="" title="">
                                <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                                    <img src=""/></div>
                            </a>

                            <p>
                                aaasdas
                            </p>
                        </div>
                    </div>
                    <div class="col starts-at-full ends-at-one-third <?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
                        <div class="heading-holding-banner">
                            <h2><span><span><a href=""><?php // echo get_the_title(); ?></a> </span></span></h2>
                        </div>
                        <div class="breather">
                            <a href="" title="">
                                <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                                    <img src=""/></div>
                            </a>

                            <p>
                                aaasdas
                            </p>
                        </div>
                    </div>
                    <div class="col starts-at-full ends-at-one-third <?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
                        <div class="heading-holding-banner">
                            <h2><span><span><a href=""><?php // echo get_the_title(); ?></a> </span></span></h2>
                        </div>
                        <div class="breather">
                            <a href="" title="">
                                <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                                    <img src=""/></div>
                            </a>

                            <p>
                                aaasdas
                            </p>
                        </div>
                    </div>
                    <div class="col starts-at-full ends-at-one-third <?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
                        <div class="heading-holding-banner">
                            <h2><span><span><a href=""><?php // echo get_the_title(); ?></a> </span></span></h2>
                        </div>
                        <div class="breather">
                            <a href="" title="">
                                <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                                    <img src=""/></div>
                            </a>

                            <p>
                                aaasdas
                            </p>
                        </div>
                    </div>
                    <div class="col starts-at-full ends-at-one-third <?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
                        <div class="heading-holding-banner">
                            <h2><span><span><a href=""><?php // echo get_the_title(); ?></a> </span></span></h2>
                        </div>
                        <div class="breather">
                            <a href="" title="">
                                <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                                    <img src=""/></div>
                            </a>

                            <p>
                                aaasdas
                            </p>
                        </div>
                    </div>
                    <div class="col starts-at-full ends-at-one-third <?php // $count <= 1 ? 'ends-at-half' : 'ends-at-one-third' ?> clr box">
                        <div class="heading-holding-banner">
                            <h2><span><span><a href=""><?php // echo get_the_title(); ?></a> </span></span></h2>
                        </div>
                        <div class="breather">
                            <a href="" title="">
                                <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                                    <img src=""/></div>
                            </a>

                            <p>
                                aaasdas
                            </p>
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
