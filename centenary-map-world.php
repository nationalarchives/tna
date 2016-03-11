<?php
/* Template Name: Centenary Map World View */
get_header(); ?>
<main role="main" data-country="global">
    <div class="navigation-container">
        <div class="heading-container">
            <div class="logo-holder">
                <img src="/wp-content/themes/tna/images/centenary-map/100-logo.png" alt="First World War 100">
            </div><!-- end logo-holder -->
            <h1>First World War: A global view</h1>
        </div><!-- end heading-container -->
        <div class="map-container">
            <ul class="utilities">
                <li><a href="#countries" id="countries-link">Regions</a></li>
                <li><a href="#about" id="about-link">About this map</a></li>
            </ul>

            <?php

            // Retrieve the map value from the GET array
            $map = $_GET['map'];

            // If the value is empires, show the empire view...
            if($map === "empires") { ?>
                <ul class="buttons">
                    <li><a href="/first-world-war/a-global-view" title="tooltip">Show region view</a></li>
                </ul>
                <?php include 'inc/centenary-map/1914-map-empire.php'; ?>
                </div><!-- end map-container -->
            </div><!-- end navigation-container -->
            <div class="row box">
                <div class="center breather">
                    <div class="width-full">
                        <h2 class="icon">Key to empires in the First World War</h2>
                    </div><!-- end width-full -->
                    <p>This map is designed to provide an outline of countries and borders during wartime rather than a precise location of places, borders or features.</p>
                    <div id="desktop-keywords" class="key">
                        <ul class="no-bullet border-none keywords-selectable clr">
                            <li><span class="austro-hungarian"></span>Austria-Hungary</li>
                            <li><span class="belgian"></span>Belgium</li>
                            <li><span class="british"></span>Britain</li>
                            <li><span class="danish"></span>Denmark</li>
                            <li><span class="french"></span>France</li>
                            <li><span class="german"></span>Germany</li>
                            <li><span class="italian"></span>Italy</li>
                            <li><span class="dutch"></span>Netherlands</li>
                            <li><span class="ottoman"></span>Ottoman Empire</li>
                            <li><span class="portugese"></span>Portugal</li>
                            <li><span class="russian"></span>Russia</li>
                            <li><span class="spanish"></span>Spain</li>
                            <li><span class="japanese"></span>Japan</li>
                            <li><span class="independent"></span>Independent</li>
                        </ul>
                    </div><!-- end desktop keywords -->
                </div><!-- end center breather -->
            </div><!-- end row -->
            <?php }

            // or else, show the continent view...
            else { ?>
                <ul class="buttons">
                    <li><a href="?map=empires" title="tooltip">Show 1914 empires</a></li>
                </ul>
                <?php include 'inc/centenary-map/1914-map-continent.php'; ?>
                </div><!-- end map-container -->
            </div><!-- end navigation-container -->
            <?php } ?>

    <div class="container">
        <div class="center breather">
            <div class="width-full"><a id="countries"></a>
                <h2 class="icon">Regions</h2>
            </div><!-- end width-full -->
            <div class="row">
                <div class="col starts-at-full">
                    <div id="desktop-keywords">
                        <ul class="no-bullet border-none keywords-selectable clr">
                                <?php
                                // Retrieve any pages that have an exclusion category applied
                                $idObj = get_category_by_slug('exclude-from-parent');
                                $id = $idObj->term_id;
                                // Show immediate child pages
                                $args = array(
                                    'category__not_in' => $id,
                                    'post_type' => 'page',
                                    'posts_per_page' => -1,
                                    'post_parent' => $post->ID,
                                    'order' => 'ASC',
                                    'orderby' => 'title'
                                );
                                $regions = new WP_Query($args);
                                if ($regions->have_posts()) {
                                    while ($regions->have_posts()) {
                                        $regions->the_post(); ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                            <?php wp_reset_query(); ?>
                                    <?php }
                                } else {
                                    // no posts found
                                }
                                /* Restore original Post Data */
                                wp_reset_postdata();
                                ?>
                            </ul>
                    </div><!-- end desktop keywords -->
                </div><!-- end col -->
            </div><!-- end index row -->
        </div><!-- end center breather -->
    </div><!-- end container -->
    <div class="row box">
        <div class="center breather">
            <div class="width-full"><a id="about"></a>
                <h2 class="icon">About this map</h2>
            </div><!-- end width-full -->
            <?php the_content(); ?>
        </div><!-- end center breather -->
    </div><!-- end row box -->
</main>
<?php get_footer(); ?>
