<?php
/*
Template Name: People index
*/
get_header(); ?>
<div id="page_wrap" class="container" role="main">
    <!-- Breadcrumbs -->
    <?php include 'breadcrumb.php'; ?>

    <!-- Page content -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col starts-at-full ends-at-full box clr">
                    <div class="heading-holding-banner">
                        <h1><span><span><?php the_title(); ?></span></span></h1>
                    </div><!-- end heading-holding-banner -->
                    <div class="breather clr">
                        <div class="col starts-at-full ends-at-two-thirds clr">
                            <?php the_content(); ?>
                        </div><!-- end breather clr -->
                    </div><!-- end col full -->
                </div><!-- end col row -->
                <div id="index" class="row">
                    <?php

                    // Store and sort the child pages of the current page in an array
                    $pages = get_pages('sort_column=menu_order&child_of=' . $post->ID . '&parent=' . $post->ID . '');

                    // Loop through the array
                    foreach ($pages as $page) {

                        // Store the title
                        $content = $page->post_title;

                        // If there's no title, continue
                        if (!$content) {
                            continue;
                        }
                        // Clean the stored title
                        $content = apply_filters('the_content', $content);
                        $content = strip_tags($content);
                        ?>
                        <div class="col starts-at-full ends-at-one-third photo-extend box clr">
                            <div class="breather picture-container">
                                <?php
                                // Store the featured image ID
                                $image_id = get_post_thumbnail_id($page->ID);

                                // Store the featured image URL
                                $image_url = wp_get_attachment_image_src($image_id, 'thumb', false);

                                // Store the page ID
                                $page_id = get_page_link($page->ID);

                                // Store the page excerpt
                                $page_excerpt = $page->post_excerpt;

                                // If there's an image
                                if ($image_url) { ?>
                                    <a href="<?php echo $page_id ?>" title="<?php echo $content ?>"><img
                                            src="<?php echo($image_url[0]); ?>" alt="<?php echo $content ?>"/></a>
                                <?php } ?>
                            </div><!-- end picture-container -->
                            <div class="picture-description">
                                <h2><a href="<?php echo $page_id ?>" title="<?php echo $content ?>"><?php echo $content ?></a></h2>
                                <?php
                                // If there's a page excerpt
                                if ($page_excerpt) { ?>
                                    <p><?php echo $page_excerpt ?></p>
                                <?php } ?>
                            </div><!-- end picture-description -->
                        </div><!-- end col one-third -->
                <?php } ?>
            </div><!-- end row -->
        <?php endwhile; ?>
    <?php endif; ?>
    </div><!-- end page content -->
    <?php get_footer(); ?>
