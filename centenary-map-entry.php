<?php
/*
Template Name: Centenary Map Country View
*/

include 'inc/centenary-map/map-functions.php';
$country = get_the_title();
$coordinates = getCoordinates($country, 'viewbox');
$height = getCoordinates($country, 'height');

get_header(); ?>
    <main role="main" data-country="<?php echo $country; ?>">
        <div class="navigation-container">
            <div class="heading-container">
                <div class="logo-holder">
                    <img src="/wp-content/themes/tna/images/centenary-map/100-logo.png" alt="First World War 100">
                </div><!-- end logo-holder -->
                <h1<?php if( get_field('modern_country_name') ): ?> class="pad-none" <?php endif; ?>><?php echo $country; ?> in 1914</h1>
                <?php if( get_field('modern_country_name') ): ?>
                    <p class="modern">Now <?php echo the_field('modern_country_name'); ?></p>
                <?php endif; ?>
            </div><!-- end heading-container -->
            <div class="map-container" style="padding-bottom: <?php echo $height; ?>% !important;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                     y="0px"
                     viewBox="<?php echo $coordinates; ?>" xml:space="preserve" width="100%" height="100%"
                     preserveAspectRatio="xMidYMin slice" id="country-view">
                <?php include 'inc/centenary-map/1914-map-country.php'; ?>
            </div><!-- end map-container -->
        </div><!-- end navigation-container -->
        <div class="row box">
            <div class="container center">
                <?php include 'breadcrumb.php'; ?>
            </div><!-- end container center -->
        </div><!-- end row box -->
        <div class="row">
            <div class="container center margin-top-large">
                <div class="col starts-at-full ends-at-one-third full-override">
                    <ul class="no-bullet" role="tablist">
                        <li id="panel-1" role="tab">Overview</li>
                        <?php if (get_field('tab_1')) {
                            while (has_sub_field('tab_1')): ?>
                                <li id="panel-2" role="tab"><?php echo the_sub_field('title'); ?></li><?php endwhile;
                        } ?>
                        <?php if (get_field('tab_2')) {
                            while (has_sub_field('tab_2')): ?>
                                <li id="panel-3" role="tab"><?php echo the_sub_field('title'); ?></li><?php endwhile;
                        } ?>
                        <?php if (get_field('tab_3')) {
                            while (has_sub_field('tab_3')): ?>
                                <li id="panel-4" role="tab"><?php echo the_sub_field('title'); ?></li><?php endwhile;
                        } ?>
                        <?php if (get_field('tab_4')) {
                            while (has_sub_field('tab_4')): ?>
                                <li id="panel-5" role="tab"><?php echo the_sub_field('title'); ?></li><?php endwhile;
                        } ?>
                        <?php if (get_field('tab_5')) {
                            while (has_sub_field('tab_5')): ?>
                                <li id="panel-6" role="tab"><?php echo the_sub_field('title'); ?></li><?php endwhile;
                        } ?>
                        <?php if (get_field('key_figures')) { ?>
                            <li id="panel-7" role="tab">Key figures</li><?php } ?>
                        <?php if (get_field('key_documents')) { ?>
                            <li id="panel-8" role="tab">Key documents</li><?php } ?>
                    </ul>
                </div><!-- end col -->
                <div class="col starts-at-full ends-at-two-thirds content-area">
                    <p class="float-right caption"><a href="/first-world-war/a-global-view/glossary">Glossary</a></p>
                    <div class="tabs" role="tabpanel" aria-labelledby="panel-1">
                        <h2>Overview</h2>
                        <?php echo the_field('introduction'); ?>
                    </div><!-- end tabpanel -->
                    <?php if (get_field('tab_1')): ?>
                        <?php while (has_sub_field('tab_1')): ?>
                            <div class="tabs" role="tabpanel" aria-labelledby="panel-2">
                                <h2><?php echo the_sub_field('title'); ?></h2>
                                <?php if (get_sub_field('image')): ?>
                                    <img src="<?php echo the_sub_field('image'); ?>"
                                         alt="<?php echo the_sub_field('image_reference'); ?>"/>
                                    <p class="caption"><?php echo the_sub_field('image_credit'); ?><?php if (get_sub_field('image_link')) { ?>
                                        <a href="<?php echo the_sub_field('image_link'); ?>"
                                           target="_blank"><?php echo the_sub_field('image_reference'); ?></a></p>
                                    <?php } else { ?>
                                        <p class="caption"><?php echo the_sub_field('image_reference'); ?></p>
                                    <?php } ?>
                                <?php endif; ?>
                                <?php echo the_sub_field('content'); ?>
                            </div><!-- end tabpanel -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (get_field('tab_2')): ?>
                        <?php while (has_sub_field('tab_2')): ?>
                            <div class="tabs" role="tabpanel" aria-labelledby="panel-3">
                                <h2><?php echo the_sub_field('title'); ?></h2>
                                <?php if (get_sub_field('image')): ?>
                                    <img src="<?php echo the_sub_field('image'); ?>"
                                         alt="<?php echo the_sub_field('image_reference'); ?>"/>
                                    <p class="caption"><?php echo the_sub_field('image_credit'); ?><?php if (get_sub_field('image_link')) { ?>
                                        <a href="<?php echo the_sub_field('image_link'); ?>"
                                           target="_blank"><?php echo the_sub_field('image_reference'); ?></a></p>
                                    <?php } else { ?>
                                        <p class="caption"><?php echo the_sub_field('image_reference'); ?></p>
                                    <?php } ?>
                                <?php endif; ?>
                                <?php echo the_sub_field('content'); ?>
                            </div><!-- end tabpanel -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (get_field('tab_3')): ?>
                        <?php while (has_sub_field('tab_3')): ?>
                            <div class="tabs" role="tabpanel" aria-labelledby="panel-4">
                                <h2><?php echo the_sub_field('title'); ?></h2>
                                <?php if (get_sub_field('image')): ?>
                                    <img src="<?php echo the_sub_field('image'); ?>"
                                         alt="<?php echo the_sub_field('image_reference'); ?>"/>
                                    <p class="caption"><?php echo the_sub_field('image_credit'); ?><?php if (get_sub_field('image_link')) { ?>
                                        <a href="<?php echo the_sub_field('image_link'); ?>"
                                           target="_blank"><?php echo the_sub_field('image_reference'); ?></a></p>
                                    <?php } else { ?>
                                        <p class="caption"><?php echo the_sub_field('image_reference'); ?></p>
                                    <?php } ?>
                                <?php endif; ?>
                                <?php echo the_sub_field('content'); ?>
                            </div><!-- end tabpanel -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (get_field('tab_4')): ?>
                        <?php while (has_sub_field('tab_4')): ?>
                            <div class="tabs" role="tabpanel" aria-labelledby="panel-5">
                                <h2><?php echo the_sub_field('title'); ?></h2>
                                <?php if (get_sub_field('image')): ?>
                                    <img src="<?php echo the_sub_field('image'); ?>"
                                         alt="<?php echo the_sub_field('image_reference'); ?>"/>
                                    <p class="caption"><?php echo the_sub_field('image_credit'); ?><?php if (get_sub_field('image_link')) { ?>
                                        <a href="<?php echo the_sub_field('image_link'); ?>"
                                           target="_blank"><?php echo the_sub_field('image_reference'); ?></a></p>
                                    <?php } else { ?>
                                        <p class="caption"><?php echo the_sub_field('image_reference'); ?></p>
                                    <?php } ?>
                                <?php endif; ?>
                                <?php echo the_sub_field('content'); ?>
                            </div><!-- end tabpanel -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (get_field('tab_5')): ?>
                        <?php while (has_sub_field('tab_5')): ?>
                            <div class="tabs" role="tabpanel" aria-labelledby="panel-6">
                                <h2><?php echo the_sub_field('title'); ?></h2>
                                <?php if (get_sub_field('image')): ?>
                                    <img src="<?php echo the_sub_field('image'); ?>"
                                         alt="<?php echo the_sub_field('image_reference'); ?>"/>
                                    <p class="caption"><?php echo the_sub_field('image_credit'); ?><?php if (get_sub_field('image_link')) { ?>
                                        <a href="<?php echo the_sub_field('image_link'); ?>"
                                           target="_blank"><?php echo the_sub_field('image_reference'); ?></a></p>
                                    <?php } else { ?>
                                        <p class="caption"><?php echo the_sub_field('image_reference'); ?></p>
                                    <?php } ?>
                                <?php endif; ?>
                                <?php echo the_sub_field('content'); ?>
                            </div><!-- end tabpanel -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (get_field('key_figures')): ?>
                        <div class="tabs" role="tabpanel" aria-labelledby="panel-7">
                            <h2>Key figures</h2>
                            <?php while (has_sub_field('key_figures')): ?>
                                <div class="image-list-container clr">
                                    <div class="image">
                                        <?php if (get_sub_field('figure_image')) { ?>
                                            <img src="<?php echo the_sub_field('figure_image'); ?>"
                                                 alt="<?php echo the_sub_field('figure_name'); ?>"/>
                                        <?php } ?>
                                    </div><!-- end image -->
                                    <div class="description">
                                        <p class="margin-none"><?php if (get_sub_field('figure_link')){ ?><a
                                                href="<?php echo the_sub_field('figure_link'); ?>"
                                                title="Find out more about <?php echo the_sub_field('figure_name'); ?>"
                                                target="_blank"><?php } ?><?php echo the_sub_field('figure_name'); ?><?php if (get_sub_field('figure_link')){ ?></a><?php } ?>
                                        </p>

                                        <p><?php echo the_sub_field('figure_description'); ?></p>
                                        <?php if (get_sub_field('npg_number')) { ?>
                                            <p class="caption"><a href="<?php echo the_sub_field('npg_link'); ?>"
                                                                  target="_blank" title="">Detail of
                                                    NPG <?php echo the_sub_field('npg_number'); ?>
                                                    , <?php echo the_sub_field('npg_title'); ?>, &copy; National
                                                    Portrait Gallery, London.</a></p>
                                        <?php } ?>
                                    </div><!-- end description -->
                                </div><!-- end image-list-container -->
                            <?php endwhile; ?>
                        </div><!-- end tabpanel -->
                    <?php endif; ?>
                    <?php if (get_field('key_documents')): ?>
                    <div class="tabs" role="tabpanel" aria-labelledby="panel-8">
                        <h2>Key documents</h2>
                        <?php if (get_field('key_documents_image')): ?>
                            <img src="<?php echo the_field('key_documents_image'); ?>"
                                 alt="<?php echo the_field('key_documents_image_reference'); ?>" />
                            <p class="caption"><?php echo the_field('key_documents_image_credit'); ?><?php if (get_field('key_documents_image_reference')) { ?>
                                <a href="<?php echo the_field('key_documents_image_link'); ?>"
                                   target="_blank"><?php echo the_field('key_documents_image_reference'); ?></a></p>
                            <?php } else { ?>
                                <p class="caption"><?php echo the_field('key_documents_image_reference'); ?></p>
                            <?php } ?>
                        <?php endif; ?>
                        <ul>
                            <?php while (has_sub_field('key_documents')): ?>
                                <li><?php echo the_sub_field('document_content'); ?>
                                    <a href="<?php echo the_sub_field('document_link'); ?>" title="View <?php echo the_sub_field('document_reference'); ?> in Discovery"><?php echo the_sub_field('document_reference'); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                        <?php if (get_field('preview_images')): ?>
                            <h3>Preview images</h3>
                            <?php while (has_sub_field('preview_images')):
                                $prev_image = wp_get_attachment_image_src(get_sub_field('preview_image'), 'full');
                                $prev_thumb = wp_get_attachment_image_src(get_sub_field('preview_image'), 'thumbnail'); ?>
                                <div class="float-left margin-right-medium">
                                    <img src="<?php echo $prev_thumb[0]; ?>" alt="<?php echo the_sub_field('preview_image_reference_number'); ?>" />
                                    <p><a href="<?php echo $prev_image[0]; ?>" target="_blank"><?php echo the_sub_field('preview_image_reference_number'); ?></a></p>

                                </div><!-- end float-left -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!-- end tabpanel -->
                </div><!-- end col ends-at-two-thirds -->
            </div><!-- end container -->
        </div><!-- end row -->
    </main>
<?php get_footer(); ?>
