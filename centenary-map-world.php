<?php
/* Template Name: Centenary Map World View */
get_header(); ?>
<main role="main">
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
            <ul class="buttons">
                <li><a href="" title="tooltip">Show 1914 empires</a></li>
            </ul>
            <?php include 'inc/centenary-map/continent-map.php'; ?>
        </div><!-- end map-container -->
    </div><!-- end navigation-container -->
    <div class="container">
        <div class="center breather">
            <div class="width-full"><a id="countries"></a>

                <h2 class="icon">Regions</h2>
            </div><!-- end width-full -->
            <div class="row">
                <div class="col starts-at-full">
                    <div class="grid-within-grid-three-item">
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
                        <div>
                            <h3 class="icon"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php // Show immediate child pages
                            $args = array(
                                'category__not_in' => $id,
                                'post_type' => 'page',
                                'posts_per_page' => 3,
                                'post_parent' => $post->ID,
                                'order' => 'ASC',
                                'orderby' => 'title'
                            );
                            $countries = new WP_Query($args);
                            if ($countries->have_posts()) { ?>
                                <ul class="no-bullet margin-none">
                                    <?php while ($countries->have_posts()) {
                                        $countries->the_post(); ?>
                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php } ?>
                                </ul>
                            <?php }
                            wp_reset_query(); ?>
                        </div><!-- end grid-item -->
                    <?php }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
                    </div><!-- end grid-within-grid-three-item -->
                </div><!-- end col -->
            </div><!-- end index row -->
        </div><!-- end center breather -->
    </div><!-- end container -->
    <div class="row box">
        <div class="center breather">
            <div class="width-full"><a id="about"></a>

                <h2 class="icon">About this map</h2>
            </div><!-- end width-full -->
            <p>Explore the global impact of the First World War through our interactive map, which highlights key events
                and figures in countries from Aden to Zanzibar. Drawn directly from our records at The National
                Archives, the map aims to go beyond the trenches of the Western Front and shows how the war affected
                different parts of the world.</p>

            <p>The First World War: A global view is part of our First World War 100 programme. It currently focuses on
                the contributions of countries and territories from the British Empire in 1914. We will continue to
                develop the map over the next four years, to show more countries and territories across Europe, the
                Middle East, the Americas, Africa and Asia.</p>

            <h3>Getting started</h3>

            <p>To get started, select a country or territory by clicking on a marker Map maker icon on the map, or
                select a name from the list on the left. Navigate through the tabs to read about battles, life on the
                Home Front and much more. Each country or territory is illustrated with images, maps and other documents
                from our collections. Click on the references to find key documents in Discovery, our catalogue, or
                images in our image library.</p>

            <p>To reflect changing borders and country names since 1914, we have provided two map views. Switch between
                the global map as it was during wartime, and as it is today, by using the buttons at the top of the
                map.</p>

            <p>To find out more about the map, please read our blog post.</p>
        </div><!-- end center breather -->
    </div><!-- end row box -->
</main>
<?php get_footer(); ?>
