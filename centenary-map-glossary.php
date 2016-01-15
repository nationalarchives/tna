<?php
/*
Template Name: Centenary Map Glossary
*/

get_header(); ?>
    <main role="main">
        <div class="navigation-container">
            <div class="heading-container">
                <div class="logo-holder">
                    <img src="/wp-content/themes/tna/images/centenary-map/100-logo.png" alt="First World War 100">
                </div><!-- end logo-holder -->
                <h1><?php the_title(); ?></h1>
            </div><!-- end heading-container -->
        </div><!-- end navigation-container -->
        <div class="row box">
            <div class="container center">
                <?php include 'breadcrumb.php'; ?>
            </div><!-- end container center -->
        </div><!-- end row -->
        <div class="container">
            <div class="center breather">
                <div class="row">
                    <div class="col starts-at-full ends-at-two-thirds">
                        <?php the_content(); ?>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end center breather -->
        </div><!-- end container -->
    </main>
<?php get_footer(); ?>