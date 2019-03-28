<?php
/*
Template Name: First World War Single
*/

get_header(); ?>
<?php if ( have_posts() ) : ?>

<?php 
/* 	retrieve portal ID so we can load in the stay-updated custom field from the portal
	rather than having a separate CF for each page*/
$fww_portal_id = get_page_by_path('first-world-war', OBJECT, 'page')->ID;
?>

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
  <div class="col starts-at-full ends-at-one-third clr bg-colour box-shadow">
    <div class="heading-holding-banner position-relative">
      <div class="position-top-right"> <a href="https://twitter.com/UkNatArchives" target="_blank" title="External website - link opens in a new window">
        <div class="sprite icon-twitter float-left"></div>
        </a> <a href="https://www.facebook.com/TheNationalArchives" target="_blank" title="External website - link opens in a new window">
        <div class="sprite icon-facebook float-left"></div>
        </a> </div>
      <h2> <span> <span> Stay updated </span> </span> </h2>
    </div>
    <div class="breather">
      <?php the_field('stay-updated', $fww_portal_id); ?>
      <div class="clear-both"></div>
      <div class="pad-bottom-large"></div>
      <p></p>
    </div>
    <!-- end col --> 
  </div>
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
