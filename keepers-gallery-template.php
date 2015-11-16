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
                    <!--  This query get the title for 'Current displays'-->
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
                    ?>
                    <?php
                        if ($childQueryTitle->have_posts()) :
                            while ($childQueryTitle->have_posts()) : $childQueryTitle->the_post();
                        ?>
                                <h2><?php the_title(); ?></h2>
                            <?php endwhile; else: ?>
                            <h2>No child page found!!</h2>
                        <?php
                            endif; wp_reset_query();
                        ?>
<!--                    <h2>Current display!!!</h2>-->
                    <!--  END This query get the title for 'Current displays'-->

                    <!--  The query to fetch all page posts for the 'Current display' -->

                    <div class="clear-both" style="height: 0px;"></div>

                    <!--  Events starts here-->
                    <div class="pictorial-list grid-within-grid-two-item resource-results">
                        <?php //new query for Current display

                            $page_title = get_page_by_title('Current display');
                            $parent = $page_title->ID;

                            if (get_query_var('paged')) $paged = get_query_var('paged');
                            if (get_query_var('page')) $paged = get_query_var('page');

                            $arg = array(
                                  'post_type'       =>  'page',
                                  'post_parent'     =>  $parent,
                                  'paged'           =>  $paged,
                                  'order'           =>  'ASC',
                                  'posts_per_page'  =>  -1,
                                  'orderby'         =>  'menu_order'
                                );
                            $the_query = new WP_Query( $arg );

                            //var_dump($parent);
                        ?>

                        <?php

                            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

                        ?>
                                <div class="resource-block">
                                    <a href="#" title="<?php the_title(); ?>">
                                        <div class="has-background" style="background-image: url(<?php
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),
                                            'single-post-thumbnail' );
                                        echo $image[0];
                                        ?>)">
                                        </div>
                                        <h3 class="margin-bottom-small"><?php the_title(); ?></h3>
                                    </a>

                                    <div class="margin-top-medium margin-bottom-medium">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; else: ?>
                                <p>Sorry, there are no posts to display</p>

                            <?php endif; wp_reset_query();?>
                    </div>

                    <div class="clear-both" style="height: 0px;"></div>

                    <?php
                        $parent_id = get_the_ID();
                        if (get_query_var('paged')) $paged = get_query_var('paged');
                        if (get_query_var('page')) $paged = get_query_var('page');

                        $args = array(
                            'post_type' => 'page',
                            'paged' => $paged,
                            'post_parent' => $parent_id,
                            'posts_per_page' => 1,
                            'orderby' => 'title',
                            'order' => 'DESC'
                        );
                        $the_query = new WP_Query( $args );
                    ?>
                    <?php
                        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                    <h2><?php the_title(); ?></h2>
                    <?php endwhile; else: ?>
                    <h2>No child page found for keeper's gallery</h2>
                    <?php
                        endif; wp_reset_query();
                    ?>

                    <div class="pictorial-list grid-within-grid-three-item resource-results">
                        <?php //new query for Events
                            $page_title = get_page_by_title('Events');
                            $parent = $page_title->ID;

                            if (get_query_var('paged')) $paged = get_query_var('paged');
                            if (get_query_var('page')) $paged = get_query_var('page');

                            $arg = array(
                                'post_type'       =>  'page',
                                'post_parent'     =>  $parent,
                                'paged'           =>  $paged,
                                'order'           =>  'ASC',
                                'posts_per_page'  =>  -1,
                                'orderby'         =>  'menu_order'

                            );
                            $the_query = new WP_Query( $arg );

                        ?>
                        <?php

                        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

                            ?>
                            <div class="resource-block">
                                <a href="#" title="<?php the_title(); ?>">
                                    <div class="has-background" style="background-image: url(<?php
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),
                                        'single-post-thumbnail' );
                                    echo $image[0];
                                    ?>)">
                                    </div>
                                    <h3 class="margin-bottom-small">
                                        <?php echo str_replace(',','<br />',get_the_title()); ?>
                                    </h3>
                                </a>

                                <div class="margin-top-medium margin-bottom-medium">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endwhile; else: ?>
                            <p>Sorry, no events to display</p>

                        <?php endif; wp_reset_query(); ?>
                    </div>
                    <div class="clear-both" style="height: 0px;"></div>
                    <p>
                        <?php
                        $meta = get_post_meta( get_the_ID(), '_myfield_editor', true ) ;
                        echo $meta;
                        //print_r($meta);
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