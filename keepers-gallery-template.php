<?php
/*
Template Name: Keepers Gallery Template
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
                <div class="image-container large position-relative"
                     style="background-image: url('<?php echo $feat_image; ?>')">
                    <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>

                <!--                    <div class="overlay width-full">
                        <div class="breather">
                            The Keeper's Gallery is free and is open 09:00-17:00,
                            Tuesday to Saturday.
                        </div>
                    </div>
-->
                </div>
                <div class="content-area">
                    <h1 class="section-heading">
                        <span>
                            <span><?php the_title(); ?></span>
                        </span>
                    </h1>

                <?php the_content(); ?>

                <?php endwhile; else: ?>
                <p>Sorry, no posts to list</p>
                <?php endif; ?>
            </div>

                <?php if ( has_tag( "displays" ) ) {?>
                <div>
                    <!--  This query get the title for 'Current displays'-->
                    <?php
                    $current_displays_id = KEEPERS_GALLERY_DISPLAYS;
                    $post_current_displays = get_post($current_displays_id);
                    $title = $post_current_displays->post_title;
                    if ($title == !null) {
                        echo '<h2>' . $title . '</h2>';
                    } else {
                        echo '<h2>' . "Current displays" . '</h2>';
                    }
                    ?>

                <div class="clear-both" style="height: 0px;"></div>

                <!--  Events starts here-->
                <div class="keepers-list grid-within-grid-two-item resource-results">
                    <?php //new query for Current display

                        if (get_query_var('paged')) $paged = get_query_var('paged');
                        if (get_query_var('page')) $paged = get_query_var('page');

                        $arg = array(
                            'post_type' => 'page',
                            'post_parent' => $current_displays_id,
                            'paged' => $paged,
                            'order' => 'ASC',
                            'posts_per_page' => 15,
                            'orderby' => 'menu_order'
                        );
                        ?>

                    <?php
                        if (defined('KEEPERS_GALLERY_DISPLAYS') and !empty($current_displays_id)) {
                            $the_query = new WP_Query($arg);
                            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                                ?>
                    <div class="resource-block">

                        <div class="keepers-background" style="background-image: url(<?php
                                    $image = make_relative_path_from_url(wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),
                                        'single-post-thumbnail'));
                                    echo $image[0];
                                    ?>)">
                        </div>
                        <h3 class="margin-bottom-small"><?php the_title(); ?></h3>


                        <div class="margin-top-medium margin-bottom-medium">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php endwhile;
                            else: ?>
                    <p>There are no current displays</p>

                    <?php endif;
                            wp_reset_query();

                        } else {
                            echo '<p>There are no current displays.</p>';
                        }
                        ?>
                </div>
                <div class="clear-both" style="height: 0px;"></div>
                <p>
                    <?php
                        $meta = get_post_meta(get_the_ID(), '_myfield_editor', true);
                        echo $meta;
                        ?>
                </p>
            </div>

				<?php
					}
				?>

        </div>

            <div class="col starts-at-full ends-at-one-third clr box pad-none">
                <div class="heading-holding-banner">
                    <h2 class="section-heading margin-bottom-20">
                    <span>
                        <span>You might also be interested in</span>
                    </span>
                    </h2>
                </div>
                <div class="separator clr no-left-right-padding no-bottom-padding">
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
                <div class="breather separator no-left-right-padding">
                    <h3>Keeper's Gallery blog</h3>

                    <p>To find out more about our latest exhibits, read our Keeper's Gallery <a href="https://blog.nationalarchives.gov.uk/?s=keeper%27s+gallery">blog series</a>.
                    </p>
                </div>


                <p>To find out more about our latest exhibits, read our Keeper's Gallery <a
                        href="https://blog.nationalarchives.gov.uk/?s=keeper%27s+gallery">blog series</a>.
                </p>
            </div>


        </div>

    </div>
</div>
<?php
get_footer();
?>
