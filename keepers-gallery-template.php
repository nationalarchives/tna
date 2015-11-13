<?php
/*
Template Name: Keepers Gallery Template
*/
get_header();
?>
<div class="container" id="page_wrap" role="main">
    <div id="breadcrumb"><?php include 'breadcrumb.php'; ?></div>
    <div class="row">
        <div class="col starts-at-full ends-at-two-thirds box clr">
        <?php
            if (has_post_thumbnail( $post->ID ) ):
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        ?>

            <div class="image-container large position-relative pad-top-medium" style='background-image: url("<?php echo $image[0]; endif; ?>");'>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1 class="margin-none">
                    <span>
                        <span><?php the_title() ;?></span>
                    </span>
                </h1>

                <div class="overlay width-full">
                    <div class="breather">
                        The Keeper's Gallery is free and is open 09:00-17:00,
                        Tuesday to Saturday.
                    </div>
                </div>
            </div>
            <div class="breather">

                    <?php the_content(); ?>

                <?php endwhile; else: ?>
                    <p>Sorry, no posts to list</p>
                <?php endif; ?>
            </div>
            <div class="breather">
                <!--  Current highlights starts here-->
                <?php
                    $parent_id = get_the_ID();

                     if (get_query_var('paged')) $paged = get_query_var('paged');
                     if (get_query_var('page')) $paged = get_query_var('page');

                        $childQueryTitle = new WP_Query(array(
                                'post_type' => 'page',
                                'paged' => $paged,
                                'post_parent' => $parent_id,
                                'posts_per_page' => 1,
                                'orderby' => 'title',
                                'order' => 'DESC'
                            )
                        );
                        if ($childQueryTitle->have_posts()) :
                            while ($childQueryTitle->have_posts()) : $childQueryTitle->the_post();
                ?>
                <h2><?php the_title(); ?></h2>
                <?php endwhile; else: ?>
                <h2>No child page found!</h2>
                <?php
                   endif; wp_reset_query();
                ?>
                <div class="pictorial-list grid-within-grid-two-item resource-results">

                    <?php //new query for what's on

                        $page_title = get_page_by_title("What's On");
                        $parent = $page_title->ID;

                        if (get_query_var('paged')) $paged = get_query_var('paged');
                        if (get_query_var('page')) $paged = get_query_var('page');

                        $subchildQuery = new WP_Query(array(
                                            'post_type' => 'page',
                                            'paged' => $paged,
                                            'post_parent' => $parent,
                                            'posts_per_page' => -1,
                                            'order' => 'ASC'
                                            )
                                       );
                        if ($subchildQuery->have_posts()) :
                        while ($subchildQuery->have_posts()) : $subchildQuery->the_post();
                    ?>
                    <div class="resource-block">
                        <a href="#" title="The National Archives launches Archives Inspire at DCDC">
                            <div class="has-background" style="background-image: url(
                            <?php
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),
                                    'single-post-thumbnail' );
                                echo $image[0];
                            ?>
                                )">
                            </div>
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <div class="margin-bottom-medium">
                           <?php the_content(); ?>
                        </div>
                    </div>
                    <?php endwhile; else: ?>
                    <p>No What's on post</p>
                    <?php endif; wp_reset_query(); ?>
                </div>
                <!--  Exhibition ends here-->

                <div class="clear-both" style="height: 0px;"></div>
                <?php
                $parent_id = get_the_ID();

                if (get_query_var('paged')) $paged = get_query_var('paged');
                if (get_query_var('page')) $paged = get_query_var('page');

                $childQueryTitle = new WP_Query(array(
                        'post_type' => 'page',
                        'paged' => $paged,
                        'post_parent' => $parent_id,
                        'posts_per_page' => 1,
                        'orderby' => 'title',
                        'order' => 'ASC'
                    )
                );
                if ($childQueryTitle->have_posts()) :
                    while ($childQueryTitle->have_posts()) : $childQueryTitle->the_post();
                ?>
                        <h2><?php the_title(); ?></h2>
                    <?php endwhile; else: ?>
                    <h2>No child page found!</h2>
                    <?php
                endif; wp_reset_query();
                ?>
                <!--  Events starts here-->

                <div class="pictorial-list grid-within-grid-three-item resource-results">
                    <?php //new query for Events

                    $page_title = get_page_by_title("Events");
                    $parent = $page_title->ID;

                    if (get_query_var('paged')) $paged = get_query_var('paged');
                    if (get_query_var('page')) $paged = get_query_var('page');

                    $subchildQuery = new WP_Query(array(
                            'post_type' => 'page',
                            'paged' => $paged,
                            'post_parent' => $parent,
                            'posts_per_page' => -1,
                            'order' => 'ASC'
                        )
                    );
                    if ($subchildQuery->have_posts()) :
                        while ($subchildQuery->have_posts()) : $subchildQuery->the_post();
                            ?>
                            <div class="resource-block">
                                <a href="#" title="The National Archives launches Archives Inspire at DCDC">
                                    <div class="has-background" style="background-image: url(
                                    <?php
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),
                                        'single-post-thumbnail' );
                                    echo $image[0];
                                    ?>
                                        )">
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                <div class="margin-bottom-medium">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; else: ?>
                        <p>Currently no events, please check back later.</p>
                    <?php endif; wp_reset_query(); ?>
                </div>

                <div class="clear-both" style="height: 0px;"></div>
                <p>
                    <?php
                        $meta = get_post_meta( get_the_ID(), '_myfield_editor', true ) ;
                        echo $meta;
                    ?>
                </p>
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
                    <li>Our online exhibition Treasures from The National Archives</li>
                    <li>Our education pages</li>
                    <li>Our visit us information</li>
                </ul>
                <!--[if IE 7]><div class="clear"></div><![endif]-->
            </div>
            <div class="breather separator">
                <h3>Keeper's Gallery blog</h3>
                <p>To find out more about our latest exhibits, read our Keeper's Gallery <a href="#">blog series</a>.</p>
            </div>

        </div>

    </div>
</div>

<a id="goTop"></a>

<?php
get_footer();
?>
