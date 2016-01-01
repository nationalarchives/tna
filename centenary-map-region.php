<?php
/*
Template Name: Centenary Map Region View
*/
include 'inc/centenary-map/map-functions.php';
$country = get_the_title();
$coordinates = getCoordinates($country);

get_header(); ?>
    <main role="main" data-country="<?php echo $country ?>">
        <div class="navigation-container">
            <div class="heading-container">
                <div class="logo-holder">
                    <img src="/wp-content/themes/tna/images/centenary-map/100-logo.png" alt="First World War 100">
                </div><!-- end logo-holder -->
                <h1><?php echo($country) ?> in 1914</h1>
            </div><!-- end heading-container -->
            <div class="map-container">
                <ul class="utilities">
                    <li><a href="#countries" id="countries-link">Countries/territories</a></li>
                </ul>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                     y="0px"
                     viewBox="<?php echo $coordinates; ?>" xml:space="preserve" width="100%" height="100%"
                     preserveAspectRatio="xMidYMin slice">
            <?php include 'inc/centenary-map/1914-map-mono.php'; ?>
            </div><!-- end map-container -->
        </div><!-- end navigation-container -->
        <div class="row box">
            <div class="container center">
                <?php include 'breadcrumb.php'; ?>
            </div><!-- end container center -->
        </div><!-- end row -->
        <div class="container">
            <div class="center breather">
                <div class="row">
                    <div class="col starts-at-full">
                        <div class="width-full"><a id="countries"></a>
                            <h2 class="icon">Countries/territories of <?php echo($country) ?></h2>
                        </div><!-- end width-full -->
                        <?php // Retrieve any pages that have an exclusion category applied
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
                        if ($regions->have_posts()) { ?>
                            <div id="desktop-keywords">
                                <ul class="no-bullet border-none keywords-selectable clr">
                                    <?php while ($regions->have_posts()) {
                                        $regions->the_post(); ?>
                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div><!-- end desktop-keywords -->
                        <?php } else {
                            // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();
                        ?>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end center breather -->
        </div><!-- end container -->
    </main>
<?php get_footer(); ?>