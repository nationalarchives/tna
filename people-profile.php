<?php
/*
Template Name: People profile
*/
get_header(); ?>
<div id="page_wrap" class="container" role="main">
    <!-- Breadcrumbs -->
    <?php include 'breadcrumb.php'; ?>

    <!-- Page content -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col starts-at-full ends-at-two-thirds box clr">
                    <div class="heading-holding-banner">
                        <h1><span><span><?php the_title(); ?></span></span></h1>
                    </div>
                    <div class="breather">
                        <?php
                        // If the post has a featured image...
                        if (has_post_thumbnail()) {

                            // Store the featured image
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb');
                        } ?>
                        <a href="<?php echo($image_url[0]); ?>" title="<?php echo the_title(); ?>"><img
                                src="<?php echo($image_url[0]); ?>" alt="<?php echo the_title(); ?>"
                                class="alignright"/></a>
                        <!-- the excerpt musy always be the job/role description!-->
                        <?php
                        if (! has_excerpt()) {
                        }else{
                            echo("<h2 class='margin-none margin-bottom-small'>");

                            $role = get_the_excerpt();
                            $ptags = array("<p>", "</p>");
                            $role = str_replace($ptags, "", $role);

                            echo $role;
                            echo("</h2>");
                        }
                            ?>
                        <?php the_content(); ?>
                    </div><!-- end breather -->
                </div><!-- end col -->

                <?php
                // Store the parent page ID
                $parentid = $post->post_parent;

                // Store the link to the parent page, based on the parent page ID
                $parentpermalink = get_permalink($parentid); ?>

                <div class="col starts-at-full ends-at-one-third clr box">
                    <div class="heading-holding-banner">
                        <h2><span><span><a name="inThisSection" href="<?php echo $parentpermalink; ?>">Also in <?php echo get_the_title($parentid); ?></a></span></span></h2>
                    </div><!-- end heading-holding-banner -->
                    <div class="breather">
                        <ul class="sibling">
                            <?php
                            // This uses wp_list_pages to get the list of siblings of the current page. However we're actually showing the children of the parent page. We're also excluding the current page ID ($post->ID) so as not to duplicate it in the navigation and sorting the links by their menu order, as set manually on the WP edit page
                            // We're using depth=1 to ensure we only get the children of the parent page, not grandchildren
                            // See http://codex.wordpress.org/Function_Reference/wp_list_pages for a full list of parameters
                            wp_list_pages("title_li=&child_of=$parentid&sort_column=menu_order&depth=1&exclude=$post->ID");
                            ?>
                        </ul>
                    </div><!-- end breather -->
                </div><!-- end col -->
            </div><!-- end row -->
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
