<?php
/*
Template Name: Page without siblings
*/
get_header(); ?>

<div id="page_wrap" class="container" role="main"> 
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <?php 
	
	if ( have_posts() ) : 
	
	
	?>
  <?php while ( have_posts() ) : the_post(); ?>
  
  <!-- content goes here -->
  
  <div class="row">
    <div class="col starts-at-full ends-at-two-thirds box clr">
      <div class="heading-holding-banner">
        <h1><span><span>
          <?php the_title(); ?>
          </span></span></h1>
      </div>
      <div class="breather">
        <?php the_content(); ?>
        <?php // START OF Accordion of links ?>
        <?php if(get_field('accordion-of-links')): ?>
          <?php require_once('inc/acf-templates/accordion-of-links.php'); ?>
        <?php endif; ?>
        <?php // END OF Accordion of links ?>
      </div>
    </div>
    
    <!-- content goes here -->
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
