<?php
/*
Template Name: Exhibition
*/

get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php $pictureboxes = get_field('fww-picture-boxes' );?>

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
  

  <!-- First World War Exhibition -->
  <!-- Introduction / Stay Updated -->
  <?php require_once('inc/acf-templates/first-world-war-row-1.php'); ?>
  <!-- Unit war dairies / Operation War Diary / Household Cavalry -->
  <?php require_once('inc/acf-templates/first-world-war-row-2.php'); ?>
  <!-- Online collections -->
  <?php require_once('inc/acf-templates/first-world-war-row-3.php'); ?>
  <!-- Event Calendary / Nationwide Centenary Activities -->
  <?php require_once('inc/acf-templates/first-world-war-row-4.php'); ?>
  <!-- My Tommy's War / Bookshop / Podcasts -->
  <?php require_once('inc/acf-templates/first-world-war-row-5.php'); ?>
  <!-- Blogs / Videoconferences / Media -->
  <?php require_once('inc/acf-templates/first-world-war-row-6.php'); ?>
  <!-- First World War Exhibition --> 
  
</div>
<?php endwhile; ?>
<?php endif; ?>


<!-- First World War Exhibition stylesheets -->
<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/ww1-centenary.css">
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/ww1-centenary-ie7.css">
<![endif]-->

<?php get_footer(); ?>
