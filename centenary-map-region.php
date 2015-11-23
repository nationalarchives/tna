<?php
/*
Template Name: Centenary Map Region View
*/

include 'inc/centenary-map/map-functions.php';
$country = "Europe";

get_header(); ?>
    <main role="main">
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
                     viewBox="<?php getCoordinates($country); ?>" xml:space="preserve" width="100%" height="100%"
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
                            <h2 class="icon">European countries/territories</h2>
                        </div><!-- end width-full -->
                        <div id="desktop-keywords">
                            <ul class="no-bullet border-none keywords-selectable clr">
                                <li><a href="">Albania</a></li>
                                <li><a href="">Austria-Hungary</a></li>
                                <li><a href="">Belgium</a></li>
                                <li><a href="">Bulgaria</a></li>
                                <li><a href="">Denmark</a></li>
                                <li><a href="country.php">Germany</a></li>
                                <li><a href="">Greece</a></li>
                                <li><a href="">Italy</a></li>
                                <li><a href="">Lichtenstein</a></li>
                                <li><a href="">Luxembourg</a></li>
                                <li><a href="">Montenegro</a></li>
                                <li><a href="">Netherlands</a></li>
                                <li><a href="">Norway</a></li>
                                <li><a href="">Portugal</a></li>
                                <li><a href="">Roumania</a></li>
                                <li><a href="">Serbia</a></li>
                                <li><a href="">Sweden</a></li>
                                <li><a href="">Switzerland</a></li>
                            </ul>
                        </div><!-- end desktop-keywords -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end center breather -->
        </div><!-- end container -->
    </main>
<?php /* Start the Loop */
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>