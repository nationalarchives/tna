<?php
/*
Template Name: FWW Competition
*/

get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="page_wrap" class="container" role="main">

<!-- Breadcrumbs // Image descriptor -->

<div class="row" id="breadcrumb-holder">
  <?php include 'breadcrumb.php'; ?>
  <div class="sprite icon-img-desc position-top-right">
    <div class="image-description" style="display: block;">
      <?php the_field('main-banner-image-description'); ?>
    </div>
  </div>
</div>
<div class="row first-world-war" id="section-header">
  <div class="col starts-at-full clr"> </div>
</div>
<div class="row">
  <div class="col starts-at-full ends-at-two-thirds bg-colour box-shadow">
    <div class="heading-holding-banner">
      <h1><span><span>
        <?php the_title();?>
        </span> </span> </h1>
    </div>
    <div class="breather introduction">
      <?php the_content();?>
      <div class="clear-both"></div>
      <div class="pad-bottom-large"></div>
    </div>
  </div>

  

  <div class="col starts-at-full ends-at-one-third clr bg-colour box-shadow secondary">
    <div class="heading-holding-banner">
      <h2> <span> <span> <?php the_field('feature-title'); ?></span> </span> </h2>
    </div>

    <div class="breather">
      <div class="pictorial-list grid-within-grid-one-item">
            
        <div class="resource-block margin-bottom-large rh-setting">
          <a href="http://www.nationalarchives.gov.uk/education/resources/telling-tommies-tales/">
            <div class="has-background" style="background-image: url(/wp-content/themes/tna/images/first-world-war/telling-tommies-tales.png)"></div>
          </a>
       <?php the_field('feature-box'); ?>
           </div><!-- closes resource-block -->
  </div>
      <div class="clear-both"></div>
      <p></p>
    </div>   
  </div>   


  <div class="col starts-at-full ends-at-one-third clr bg-colour box-shadow secondary">
    <div class="heading-holding-banner">
      <h2> <span> <span><?php the_field('social-media-title'); ?></span> </span> </h2>
    </div>
   <div class="breather">
      <?php the_field('social-media-box'); ?>
      <div class="grid-within-grid-two-item center">
        <div>
          <a href="https://www.flickr.com/photos/nationalarchives/sets/72157645788698678/" title="External website - opens in new window" target="_blank">
          <div class="media-sprite icon-large-flickr"></div>
          <p class="media-sprite-text">Flickr</p>
          </a>
        </div>

        <div>
           <a href="http://www.pinterest.com/uknatarchives/teaching-the-first-world-war/" title="External website - opens in new window" target="_blank">
            <div class="media-sprite icon-large-pinterest"></div>
           <p class="media-sprite-text">Pinterest</p></a>       
         </div>
      </div>
      <div class="grid-within-grid-two-item center">
        <div>
          <a href="http://blog.nationalarchives.gov.uk/blog/telling-tommies-tales/">
          <div class="media-sprite icon-large-blog"></div>
          <p class="media-sprite-text">Blog</p>
        </a>
        </div>
        <div>
          <a href="http://media.nationalarchives.gov.uk/?s=rail+253%2F516&Search.x=19&Search.y=14">
          <div class="media-sprite icon-large-podcasts"></div>
          <p class="media-sprite-text">Podcasts</p>
        </a>
         </div>
      </div>
      <div class="clear-both"></div>
    </div>
  </div>
      <!-- end col --> 
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<!-- First World War Exhibition stylesheets -->

<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/ww1-centenary.css">
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/ww1-centenary-ie7.css">
<![endif]-->

<?php get_footer(); ?>
