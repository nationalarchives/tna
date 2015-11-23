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
                <div class="index row">
                    <div class="col starts-at-full ends-at-one-third">
                        <h3 class="icon"><a href="region.php">Europe</a></h3>
                        <ul class="no-bullet margin-none">
                            <li><a href="">Albania</a></li>
                            <li><a href="">Austria-Hungary</a></li>
                            <li><a href="">Belgium</a></li>
                        </ul>
                        <p class="caption"><a href="">Show all &#x25B8;</a></p>
                    </div><!-- end col -->
                    <div class="col starts-at-full ends-at-one-third">
                        <h3 class="icon"><a href="">Asia</a></h3>
                        <ul class="no-bullet margin-none">
                            <li><a href="">Burma</a></li>
                            <li><a href="">Ceylon</a></li>
                            <li><a href="">India</a></li>
                        </ul>
                        <p class="caption"><a href="">Show all &#x25B8;</a></p>
                    </div><!-- end col -->
                    <div class="col starts-at-full ends-at-one-third">
                        <h3 class="icon"><a href="">Australasia</a></h3>
                        <ul class="no-bullet margin-none">
                            <li><a href="">Australia</a></li>
                            <li><a href="">Cocos (Keeling) Islands</a></li>
                            <li><a href="">New Zealand</a></li>
                        </ul>
                        <p class="caption"><a href="">Show all &#x25B8;</a></p>
                    </div><!-- end col -->
                    <div class="col starts-at-full ends-at-one-third">
                        <h3 class="icon"><a href="">Africa</a></h3>
                        <ul class="no-bullet margin-none">
                            <li><a href="">Anglo-Egyptian Sudan</a></li>
                            <li><a href="">British East Africa</a></li>
                            <li><a href="">British Gold Coast</a></li>
                        </ul>
                        <p class="caption"><a href="">Show all &#x25B8;</a></p>
                    </div><!-- end col -->
                    <div class="col starts-at-full ends-at-one-third">
                        <h3 class="icon"><a href="">Middle East</a></h3>
                        <ul class="no-bullet margin-none">
                            <li><a href="">Aden</a></li>
                            <li><a href="">Old country name</a></li>
                            <li><a href="">Old country name</a></li>
                        </ul>
                        <p class="caption"><a href="">Show all &#x25B8;</a></p>
                    </div><!-- end col -->
                    <div class="col starts-at-full ends-at-one-third">
                        <h3 class="icon"><a href="">Americas</a></h3>
                        <ul class="no-bullet margin-none">
                            <li><a href="">Barbados</a></li>
                            <li><a href="">Bermuda</a></li>
                            <li><a href="">Canada</a></li>
                        </ul>
                        <p class="caption"><a href="">Show all &#x25B8;</a></p>
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
