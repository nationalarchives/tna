<?php
/*
Template Name: Time Travel Club
*/
get_header();
?>
<div class="container" id="page_wrap" role="main">
    <?php include 'breadcrumb.php'; ?>
    <div class="row">
        <div class="col starts-at-full ends-at-two-thirds box clr">
            <?php
                $feat_image = make_relative_path_from_url(wp_get_attachment_url(get_post_thumbnail_id($post->ID)));
                ?>
            <div class="image-container large position-relative pad-top-medium"
                style="background-image: url('<?php echo $feat_image; ?>')">
                <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>
                <h1 class="margin-none">
                    <span>
                        <span><?php the_title(); ?></span>
                    </span>
                </h1>

            </div>
            <div class="breather">

                <?php the_content(); ?>

                <?php endwhile;?>
                <?php endif; ?>
            </div>

        </div>

        <div class="col starts-at-full ends-at-one-third clr box pad-none">
            <div class="heading-holding-banner">
                <h2>
                    <span>
                        <span>You might also be interested in</span>
                    </span>
                </h2>
            </div>
            <div class="breather separator clr">
                <ul class="sibling">
                    <?php

                        // This uses wp_list_pages to get the list of siblings of the current page. However we're actually showing the children of the parent page. We're also excluding the current page ID ($post->ID) so as not to duplicate it in the navigation and sorting the links by their menu order, as set manually on the WP edit page

                        // We're using depth=1 to ensure we only get the children of the parent page, not grandchildren

                        //See http://codex.wordpress.org/Function_Reference/wp_list_pages for a full list of parameters
                        $parentid = $post->post_parent;

                        wp_list_pages("title_li=&child_of=$parentid&sort_column=menu_order&depth=1&exclude=$post->ID");

                        ?>
                </ul>
                <!--[if IE 7]>
                    <div class="clear"></div><![endif]-->
            </div>
            <div class="breather separator">
                <h3>Time Travel Club blog</h3>

                <p>Find out more about what time-travel is like: <a
                        href="https://blog.nationalarchives.gov.uk/blog/tag/time-travel-club/">read our series of blog
                        posts</a>.
                </p>
            </div>

            <div class="breather separator">
                <h3>Don't forget your passport</h3>

                <p>Add a sticker to your Time Travel Club passport with each event you visit. When it's full, receive a
                    special gift.
                </p>
            </div>

        </div>

    </div>
</div>
<?php
get_footer();
?>