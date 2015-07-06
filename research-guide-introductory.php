<?php
/*
Template Name: Research guide introductory
*/
get_header(); ?>

<div id="page_wrap" class="container research-guide" role="main"> 
  
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  
  <!-- PRIMARY CONTENT -->
  <div class="row">
    <div class="col starts-at-full ends-at-two-thirds box clr">
      <h1 class="margin-none"><span><span><?php
$alttitle = '2.title-prefix';
$thealttitle = get_post_meta($post->ID, $alttitle, TRUE);
if($thealttitle != '') {
echo ($thealttitle);
}else{
echo('How to look for records of...');
}?>       </span></span> <span class="heading-constant pad-large"><?php the_title(); ?></span></h1>

      <!-- include research guide availability indicator section -->
      <?php require_once('inc/online-availability.php') ?>

      <div class="breather">

     

<?php
  the_content();

//remove this when we go LIVE!
//Prepend all relative urls with /beta/

// $getdata = str_replace("href=\"/","href=\"/beta/",$getdata);

// $getdata = apply_filters( 'the_content', $getdata );

// echo ($getdata);

?>

      


      </div><!-- end .breather -->
    </div><!-- end .col -->
    

  <!-- SECONDARY CONTENT -->
  <div class="col starts-at-full ends-at-one-third clr box" role="complementary"> 

    <!-- include research guide contact us section -->
    <?php require_once('inc/research-guide-contact.php') ?>

    <!-- include research guide related guides section -->
    <?php require_once('inc/research-guide-related-guides.php') ?>

    <!-- include research guide video guides section -->
    <?php require_once('inc/research-guide-video-guides.php') ?>

    <!-- include discovery link section -->
    <?php require_once('inc/research-guide-discovery.php') ?>

    </div><!-- end col --> 
  </div><!-- end row --> 
  <?php endwhile; ?>
  <?php endif; ?>
</div><!-- end page-wrap --> 

<?php get_footer(); ?>
