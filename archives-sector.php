<?php
/*
Template Name: Archives Sector
*/

get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="page_wrap" class="container" role="main"> 

  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <div class="row banner small <?php echo( basename(get_permalink()) ); ?>">
    <div class="col starts-at-full clr">
      <h1><span><span><?php echo get_the_title(); ?></span></span></h1>
<!-- call-to-action -->


<?php


      $banner_title =  get_post_meta(get_the_ID(), 'tna_banner_title', TRUE);

        if ($banner_title){

            $banner_desc = get_post_meta(get_the_ID(), 'tna_banner_desc', TRUE);
            $banner_btn_link = get_post_meta(get_the_ID(), 'tna_button_link_1', TRUE);
            $banner_btn_link_text = get_post_meta(get_the_ID(), 'tna_button_text', TRUE);
        ?>


                 <div class="overlay width-full no-print pad-bottom-large">

<div class="pad-large  ">

          <div class="float-left"><h2 class="margin-none"><?php echo ($banner_title);?></h2>
              <?php echo ($banner_desc );?>
          </div>


          <div class="float-left-to-right pad-top-medium"> <a href="<?php echo ($banner_btn_link );?>" class="ghost-button"  <?php if (strpos($banner_btn_link,'http://') !== false) {
                  echo 'target="_blank"';
              }?>><?php echo ($banner_btn_link_text);?></a></div>
</div>

</div>

<?php }?>


<!-- call-to-action -->

      <div class="sprite icon-img-desc position-top-right">
        <div class="image-description" style="display: block;">
          <?php the_field('main-banner-image-description'); ?>
        </div>
      </div>
    </div>
  </div>
  

<!-- Start of Archives Sector layout -->

    <div class="row">
        <div class="col starts-at-full ends-at-full clr box">
            <div class="heading-holding-banner">
                <h2>
                    <span><span>What's happening now</span></span>
                </h2>
            </div>
            <div class="breather">
                <div class="col starts-at-full ends-at-one-third clr subsection">
                    <h3>Current initiatives</h3>

                    <ul class="full">
                        <?php

                        if (have_rows( 'archives-sector-current-initiatives' )){
                            $current_rows = get_field('archives-sector-current-initiatives');
                            if ( $current_rows ) {
                                foreach( $current_rows as $row ) {

                                    $format = '<li><a href="%1$s"';
                                    if ( $row['current-initiatives-new-window'] ) {
                                        $format = $format . ' target="_blank" title="External website - link opens in a new window"';
                                    }
                                    $format = $format . '>%2$s</a></li>';

                                    echo sprintf(
                                        $format,
                                        $row[ 'current-initiatives-url' ],
                                        $row[ 'current-initiaives-link-text' ]
                                    );
                                }
                            }
                        }
                        ?>
                        <li><a href="/archives-sector/current-initiatives.htm">View all</a></li>
                    </ul>

                </div>
                <div class="col starts-at-full ends-at-one-third clr subsection">
                    <h3>Events </h3>


                    <ul class="full">
                        <?php

                        if (have_rows( 'archives-sector-events' )){
                            $events_rows = get_field('archives-sector-events');
                            if ( $events_rows ) {
                                foreach( $events_rows as $row ) {

                                    $format = '<li><a href="%1$s"';
                                    if ( $row['events-new-window'] ) {
                                        $format = $format . ' target="_blank" title="External website - link opens in a new window"';
                                    }
                                    $format = $format . '>%2$s</a></li>';

                                    echo sprintf(
                                        $format,
                                        $row[ 'events-url' ],
                                        $row[ 'events-link-text' ]
                                    );
                                }
                            }
                        }
                        ?>
                    </ul>

                </div>
                <div class="col starts-at-full ends-at-one-third clr subsection">
                    <h3>News</h3>

                    <ul class="full">
                        <?php

                        if (have_rows( 'archives-sector-news' )){
                            $news_rows = get_field('archives-sector-news');
                            if ( $news_rows ) {
                                foreach( $news_rows as $row ) {

                                    $format = '<li><a href="%1$s"';
                                    if ( $row['news-new-window'] ) {
                                        $format = $format . ' target="_blank" title="External website - link opens in a new window"';
                                    }
                                    $format = $format . '>%2$s</a></li>';

                                    echo sprintf(
                                        $format,
                                        $row[ 'news-url' ],
                                        $row[ 'news-link-text' ]
                                    );
                                }
                            }
                        }

                        ?>
                    </ul>

                </div>
            </div> <!-- closes breather 1-->
        </div>
    </div>

    <div class="row">
        <div class="col starts-at-full ends-at-half box clr ">
            <div class="image-container box-practical-guidance">
                <h2>
                    <span><span>Practical guidance</span></span>
                </h2>
            </div>
            <div class="breather">

                <?php the_field('practical-guidance');




                ?>
            </div>
        </div>

        <div class="col starts-at-full ends-at-half box clr level1majbox">
            <div class="image-container box-resources">
                <h2>
                    <span><span>Theoretical guidance</span></span>
                </h2>
            </div>
            <div class="breather">
                <?php the_field('theoretical-guidance');




                ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col starts-at-full ends-at-half clr box">
            <a href="/records/catalogues-and-online-records.htm">
                <div class="heading-holding-banner">
                    <h2>
                        <span><span>Catalogues and online records</span></span>
                    </h2>
                </div>
            </a>
            <div class="breather">
                <?php the_field('catalogues-and-online-records');




                ?>
            </div>
        </div>
        <div class="col starts-at-full ends-at-half box clr level1majbox">
            <div class="heading-holding-banner">
                <h2>
                    <span><span><a href="/archives-sector/key-sector-statistics.htm">Sector statistics</a></span></span>
                </h2>
            </div>
            <div class="breather">
                <?php the_field('sector-statistics');




                ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col starts-at-full ends-at-one-third clr box">
            <div class="heading-holding-banner">
                <h2>
                    <span><span><a href="/archives-sector/ask-question.htm">Contact the team</a></span></span>
                </h2>
            </div>
            <div class="breather">
                <?php the_field('contact-the-team');




                ?>
            </div>
        </div>
        <div class="col starts-at-full ends-at-one-third clr box">
            <div class="heading-holding-banner">
                <h2>
                    <span><span><a href="/archives-sector/share-your-expertise.htm">Share your expertise</a></span></span>
                </h2>
            </div>
            <div class="breather">
                <?php the_field('share-your-expertise');




                ?>
            </div>
        </div>
        <div class="col starts-at-full ends-at-one-third clr box">
            <div class="heading-holding-banner">
                <h2>
                    <span><span><a href="http://blog.nationalarchives.gov.uk/blog/tag/archives-sector/">From our blog</a></span></span>
                </h2>
            </div>
            <div class="breather">
                <?php

                if (have_rows( 'archives-sector-blog' )){

                    $blog_format = '<h3><a href="%1$s" title="%2$s">%2$s</a></h3><div class="entry-meta">%3$s | %4$s</div><p>%5$s</p>';
                    $blog_rows = get_field( 'archives-sector-blog' );
                    $blog_content = $blog_rows[0];

                    echo sprintf( $blog_format,
                        $blog_content[ 'archives-sector-blog-url' ],
                        $blog_content[ 'archives-sector-blog-title' ],
                        $blog_content[ 'archives-sector-blog-author' ],
                        $blog_content[ 'archives-sector-blog-published-date' ],
                        $blog_content[ 'archives-sector-blog-description' ]
                    );
                }
                ?>
            </div>
        </div>
    </div>
    <!-- closing wrapper tag -->
</div>

<!-- End of Archives Sector layout -->


<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
