<?php
/*
Template Name: Help with your research
*/

get_header(); ?>
<?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>

        <div id="page_wrap" class="container" role="main">

        <!-- Breadcrumbs -->
        <?php include 'breadcrumb.php'; ?>
        <div class="row banner small <?php echo(basename(get_permalink())); ?>">
            <div class="col starts-at-full clr">
                <h1><span><span><?php echo get_the_title(); ?></span></span></h1>
                <?php if (is_page('help-with-your-research') || strpos(strtolower(get_the_title()), 'help with your research') !== false) { ?>
                    <!-- Start of Help with your research layout -->
                    <div class="overlay width-full">
                        <ul>
                            <li><h3><?php get_post_meta('textarea_desc_one'); ?>Unfamiliar with archives?</h3><a class="button float-right" href="/help-with-your-research/start-here/">Start here</a> </li>
                            <li><h3>Search our records with</h3><a class="button float-right" href="http://discovery.nationalarchives.gov.uk/">Discovery - our catalogue</a> </li>
                            <li class="last-child"><h3>Find our digitised collections</h3><a class="button float-right" href="/help-with-your-research/research-guides/?letter=&amp;search=&amp;research-category=online">Online collections</a></li>
                        </ul>
                    </div>
                <?php } ?>
                <div class="sprite icon-img-desc position-top-right">
                    <div class="image-description" style="display: block;">
                        <?php the_field('main-banner-image-description'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if (is_page('help-with-your-research') || strpos(strtolower(get_the_title()), 'help with your research') !== false) { ?>
            <!-- Start of Help with your research layout -->
            <div class="row" id="find-a-research-guide">
                <div class="col starts-at-full ends-at-full clr box">
                    <div class="breather clr">
                        <div class="float-left width-full-to-half margin-bottom-large">
                            <h2 class="float-left margin-none pad-bottom-medium text-175pc width-full">Find a research
                                guide</h2>
                            <span class="no-print"><a href="/help-with-your-research/research-guides-keywords/"
                                                      class="hue-yellow pad-small margin-right-small">Use our A-Z
                                    index</a> or select a subject below </span></div>
                        <div class="float-left width-full-to-half margin-bottom-large no-print">
                            <form method="get" action="/help-with-your-research/research-guides/" role="search"
                                  class="input-extended position-relative pad-small margin-medium hue-25-black">
                                <label for="Search">Search all research guides</label>

                                <input type="text" id="search" name="search" placeholder="Search all research guides"
                                       value="">
                                <input type="submit" class="search-button-medium" alt="Submit search" value="">
                            </form>
                        </div>
                        <div class="float-left pictorial-list grid-within-grid-six-item" id="index"
                             style="display: block;">

                            <!-- begin news loop -->

                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=family-history">
                                    <div class="has-background research-category-family"></div>
                                    <h3 class="margin-bottom-small">Family history</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=first-world-war">
                                    <div class="has-background research-category-firstworldwar"></div>
                                    <h3 class="margin-bottom-small">First World War</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=second-world-war-research">
                                    <div class="has-background research-category-secondworldwar"></div>
                                    <h3 class="margin-bottom-small">Second World War</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=military-and-maritime">
                                    <div class="has-background research-category-militarymaritime"></div>
                                    <h3 class="margin-bottom-small">Military and maritime</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=social-and-cultural-history">
                                    <div class="has-background research-category-socialcultural"></div>
                                    <h3 class="margin-bottom-small">Social and cultural history</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=criminals-courts-and-prisons">
                                    <div class="has-background research-category-criminalscourtsprisons"></div>
                                    <h3 class="margin-bottom-small">Criminals, courts and prisons</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=political-and-economic-history">
                                    <div class="has-background research-category-politicaleconomic"></div>
                                    <h3 class="margin-bottom-small">Political and economic history</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=foreign-and-colonial-history">
                                    <div class="has-background research-category-foreigncolonial"></div>
                                    <h3 class="margin-bottom-small">Foreign and colonial history</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=land-and-maps">
                                    <div class="has-background research-category-landmaps"></div>
                                    <h3 class="margin-bottom-small">Land and maps</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?research-category=medieval-early-modern-history">
                                    <div class="has-background research-category-medievalearlymodern"></div>
                                    <h3 class="margin-bottom-small">Medieval and early modern history</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?letter=&search=&research-category=records-for-current-legal-purposes">
                                    <div class="has-background research-category-currentlegal"></div>
                                    <h3 class="margin-bottom-small">Records for current legal purposes</h3>
                                </a></div>
                            <div class="resource-block"><a
                                    href="/help-with-your-research/research-guides/?letter=&search=&research-category=online">
                                    <div class="has-background research-category-onlinecollections"></div>
                                    <h3 class="margin-bottom-small">Online collections</h3>
                                </a></div>
                        </div>
                    </div>
                    <!-- end breather -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col starts-at-full ends-at-two-thirds clr box">
                    <?php the_field('how-to-view-our-records'); ?>
                </div>
                <!-- end col -->
                <div class="col starts-at-full ends-at-one-third clr box">
                    <?php the_field('contact-us-for-advice'); ?>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col starts-at-full ends-at-half clr box">
                    <?php the_field('online-exhibitions'); ?>
                </div>
                <div class="col starts-at-full ends-at-half clr box">
                    <?php the_field('other-research-tools'); ?>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="col starts-at-full ends-at-one-third">
                    <?php tna_rss('http://blog.nationalarchives.gov.uk/blog/category/records-research/feed/', 'http://blog.nationalarchives.gov.uk/', 'Read our latest blog posts', '', 'hwyr-1') ?>
                </div>


                <div class="col starts-at-full ends-at-one-third clr box"><a
                        href="http://media.nationalarchives.gov.uk/" title="Play podcasts">
                        <div class="image-container box-podcasts">
                            <h2><span> <span>Play podcasts</span> </span></h2>
                        </div>
                    </a>
                    <div class="breather">
                        <?php
                        if (have_rows('records-podcast-post')) {
                            $podcast_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><p>%3$s</p>';
                            $podcast_rows = get_field('records-podcast-post');
                            $podcast_content = $podcast_rows[0];

                            echo sprintf($podcast_format,
                                $podcast_content['records-podcast-url'],
                                $podcast_content['records-podcast-title'],
                                $podcast_content['records-podcast-description']
                            );
                        }
                        ?>
                    </div>
                </div>
                <div class="col starts-at-full ends-at-one-third clr box"><a
                        href="http://media.nationalarchives.gov.uk/index.php/tag/webinars/" title="View webinars">
                        <div class="image-container box-webinars">
                            <h2><span> <span>View webinars</span> </span></h2>
                        </div>
                    </a>
                    <div class="breather">
                        <?php
                        if (have_rows('records-landing-webinars')) {
                            $webinar_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><p>%3$s</p>';
                            $webinar_rows = get_field('records-landing-webinars');
                            $webinar_content = $webinar_rows[0];

                            echo sprintf($webinar_format,
                                $webinar_content['webinars-url'],
                                $webinar_content['webinars-title'],
                                $webinar_content['webinars-description']
                            );
                        }
                        ?>
                        <p class="margin-none"><a class="bullet-right"
                                                  href="http://www.nationalarchives.gov.uk/whatson">See our upcoming
                                webinars</a></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col starts-at-full ends-at-half clr box">
                    <?php the_field('reading-old-documents'); ?>
                </div>
                <div class="col starts-at-full ends-at-half clr box">
                    <?php the_field('start-here'); ?>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col starts-at-full ends-at-two-thirds box clr">
                    <?php the_field('video-guides'); ?>
                </div>
                <div class="col starts-at-full ends-at-one-third clr box records-imgBox-citingDocs">
                    <?php the_field('citing-documents'); ?>
                </div>
            </div>
            <!-- closing wrapper tag -->
            </div>
            <!-- End of Help with your research layout -->

        <?php } ?>


    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
