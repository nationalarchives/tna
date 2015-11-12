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
                <p>
                    <?php the_content(); ?>
                </p>
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
                                'orderby' => 'menu_order date'
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
                    <div class="resource-block">
                        <a href="#" title="The National Archives launches Archives Inspire at DCDC">
                            <div class="has-background" style="background-image: url(images/sample/demo2.jpg)">
                            </div>
                            <h3 class="margin-bottom-small">The Battle of Britain</h3>
                        </a>
                        <span class="entry-meta">Tuesday 25 August 2015 - February 2016</span>
                        <div class="margin-top-medium margin-bottom-medium">We are showcasing original Second World War artworks depicting the Battle of Britain to mark its 75th anniversary</div>
                    </div>

                    <div class="resource-block">
                        <a href="http://www.nationalarchives.gov.uk/about/news/the-national-archives-launches-archives-inspire-at-dcdc/" title="The National Archives launches Archives Inspire at DCDC">
                            <div class="has-background" style="background-image: url(images/sample/demo2.jpg)">
                                <!--<div class="type-label bg-peach"><span>Featured Exhibition</span></div>-->
                            </div>
                            <h3 class="margin-bottom-small">The Battle of Agincourt</h3>
                        </a>
                        <span class="entry-meta">Tuesday 6th October 2015 - Friday 29th April 2016</span>
                        <div class="margin-top-medium margin-bottom-medium">To highlight the 600th anniversary of the Battle of Agincourt a selection of documents held by The National Archives...</div>
                    </div>

                    <div class="resource-block">
                        <a href="http://www.nationalarchives.gov.uk/about/news/the-national-archives-launches-archives-inspire-at-dcdc/" title="The National Archives launches Archives Inspire at DCDC">
                            <div class="has-background" style="background-image: url(images/sample/demo3.jpg)">
                            </div>
                            <h3 class="margin-bottom-small">Magna Carta</h3>
                        </a>

                        <span class="entry-meta">Tuesday 19 May 2015 - January 2016</span>
                        <div class="margin-top-medium margin-bottom-medium">The National Archives holds many of the key documents relating to the granting of Magna Carta and its significance...</div>


                    </div>



                    <div class="resource-block">
                        <a href="http://www.nationalarchives.gov.uk/about/news/the-national-archives-launches-archives-inspire-at-dcdc/" title="The National Archives launches Archives Inspire at DCDC">
                            <div class="has-background" style="background-image: url(images/sample/demo4.jpg)">

                            </div>
                            <h3 class="margin-bottom-small">Barbara Hepworth</h3>
                        </a>

                        <span class="entry-meta">Tuesday 19 May 2015 - November 2015</span>
                        <div class="margin-top-medium margin-bottom-medium">To mark the 40th Anniversary of Barbara Hepworth's death and to tie in with the Barbara Hepworth: Sculpture for a Modern World ..</div>



                    </div>

                </div>
                <!--  Exhibition ends here-->

                <div class="clear-both" style="height: 0px;"></div>

                <!--  Events starts here-->
                <h2>Events</h2>

                <div class="pictorial-list grid-within-grid-three-item resource-results">

                    <div class="resource-block">
                        <a href="http://www.nationalarchives.gov.uk/about/news/the-national-archives-launches-archives-inspire-at-dcdc/" title="The National Archives launches Archives Inspire at DCDC">
                            <div class="has-background" style="background-image: url(http://www.nationalarchives.gov.uk/images/Sarawak.jpg)">

                            </div>
                            <h3 class="margin-bottom-small">Watch out, there's a spy about!</h3>
                        </a>

                        <span class="entry-meta">Thursday 29 October 2015 10.30-11.45</span>
                        <div class="margin-top-medium margin-bottom-medium">Come and learn about the famous spies in our collection. Discover how spies prepare for their job and...</div>


                    </div>


                    <div class="resource-block">
                        <a href="http://www.nationalarchives.gov.uk/about/news/the-national-archives-launches-archives-inspire-at-dcdc/" title="The National Archives launches Archives Inspire at DCDC">
                            <div class="has-background" style="background-image: url(http://blog.nationalarchives.gov.uk/wp-content/uploads/2015/10/KG1.jpg)">
                                <!--<div class="type-label bg-peach"><span>Featured Exhibition</span></div>-->
                            </div>
                            <h3 class="margin-bottom-small">Let battle commence!</h3>
                        </a>

                        <span class="entry-meta">Tuesday 27 October 2015 14:00 - 15:30</span>
                        <div class="margin-top-medium margin-bottom-medium">Step back in time to the late medieval period and meet a 15th century knight as he prepares for battle.</div>


                    </div>


                    <div class="resource-block">
                        <a href="http://www.nationalarchives.gov.uk/about/news/the-national-archives-launches-archives-inspire-at-dcdc/" title="The National Archives launches Archives Inspire at DCDC">
                            <div class="has-background" style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=600%C3%97315&amp;w=600&amp;h=315)">

                            </div>
                            <h3 class="margin-bottom-small">Event 3</h3>
                        </a>

                        <span class="entry-meta">Date 3</span>
                        <div class="margin-top-medium margin-bottom-medium">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since...</div>

                    </div>
                </div>

                <div class="clear-both" style="height: 0px;"></div>
                <p>
                    <?php
                        $meta = get_post_meta( get_the_ID(), '_myfield_editor', true ) ;
                        echo $meta;
                    ?>
                </p>

                <!--  Events ends here-->


            </div>
            <!--  Exhibition ends here-->
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