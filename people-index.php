<?php
/*
Template Name: People index
*/

get_header(); ?>
<?php if ( have_posts() ) : ?>
  <?php /* Start the Loop */ ?>
  <?php while ( have_posts() ) : the_post(); ?>

  <div id="page_wrap" class="container" role="main"> 

    <!-- Breadcrumbs -->
    <?php include 'breadcrumb.php'; ?>

    <!-- Page content -->
    <div class="row">
      <div class="col starts-at-full ends-at-full box clr">
        <div class="heading-holding-banner">
          <h1><span><span>
            <?php the_title(); ?>
          </span> </span> </h1>
        </div>
        <div class="breather clr">
            <div class="col starts-at-full ends-at-two-thirds clr">
                    <?php the_content(); ?>
            </div>  
            <div class="col starts-at-full ends-at-one-third clr feature-box">
                <div class="breather">
                    <p class="margin-none pad-bottom-medium center-content">Executive team meetings</p>
                    <p class="center-content margin-none"><a class="button" href="">Minutes available online</a></p>
                </div><!-- end breather -->
            </div>

           </div>
        </div>
    </div>
<div id="index" class="row">
  <?php
  $pages = get_pages('sort_column=menu_order&child_of='.$post->ID.'&parent='.$post->ID.'');

  foreach($pages as $page)
  {
    $content = $page->post_title;
    if(!$content)
     {continue;}
   $content = apply_filters('the_content', $content);
   $content = strip_tags($content);
   ?>
    <div class="col starts-at-full ends-at-one-third photo-extend box clr">
      <div class="breather picture-container">
        <?php

        $image_id = get_post_thumbnail_id($page->ID);
        $image_url = wp_get_attachment_image_src($image_id,'thumb', false);
        $page_id = get_page_link($page->ID);
        $page_excerpt = $page->post_excerpt;


        if ($image_url){
?>
        <a href="<?php echo $page_id ?>" title="<?php echo $content ?>"><img src="<?php echo($image_url[0]); ?>" alt="<?php echo $content?>" /></a>
      <?php } ?>

      </div><!-- end breather -->
      <div class="picture-description">
        <h2><a href="<?php echo $page_id ?>" title="<?php echo $content ?>"><?php echo $content ?></a></h2>
        <p><?php echo $page_excerpt ?></p>
      </div><!-- end picture-description -->
  </div>

<?php 
}

?>
</div>
</div>
</div>

<!-- end page content -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
