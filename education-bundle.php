<?php
/*
Template Name: Education bundle
*/

get_header(); ?>
<?php
$strshow = filter_input( INPUT_GET, "show", FILTER_SANITIZE_FULL_SPECIAL_CHARS );
//change $bundlenumber to change the default number posts shown
$bundlenumber = 20;
if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

  <div id="page_wrap" class="container education-bundle" role="main">

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
        <div class="breather no-left-right-padding">
           <h2><?php the_field('subheading'); ?></h2>
           <?php the_content(); ?>
           <ul class="quadruplets horizontal-list link-list">
            <?php if(get_field('section-3')): ?>
            <li><a href="#teachers-notes">Teachers' notes</a></li>
          <?php endif; ?>
          <?php if(get_field('task-content')): ?>
          <li><a href="#tasks">Tasks</a></li>
        <?php endif; ?>
        <?php if(get_field('section-2')): ?>
        <li><a href="#introduction">Introduction</a></li>
      <?php endif; ?>
      <?php if(get_field('section-4')): ?>
      <li><a href="#external-links">External links</a></li>
    <?php endif; ?>

  </ul>
<!-- <div class="float-left margin-top-medium">Images used in this classroom activity</div> -->
<div class="clear-both"></div>

<?php

if ($strshow == "all") {
				 //shows all rows
  $pages = get_pages('sort_column=menu_order&sort_order=ASC&child_of='.$post->ID.'&parent='.$post->ID.'');

}else{

  $pages = get_pages('sort_column=menu_order&sort_order=ASC&child_of='.$post->ID.'&parent='.$post->ID.'&number='.$bundlenumber.'');

}
$pagecount = count(get_pages('sort_column=menu_order&sort_order=ASC&child_of='.$post->ID.'&parent='.$post->ID.''));

?>

<!-- Masonry tiles go here -->
<div id="bundle-container">

  <?php



  foreach($pages as $page){

    $image_id = get_post_thumbnail_id($page->ID);
    $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true);
    $bundlecontent = $page ->post_content;



    ?>    <a name="more" id="more"></a>

    <div class="bundle-tile" id="bundle-tile">

      <a href="<?php echo get_page_link($page->ID) ?>" title="<?php echo $page->post_title ?>"><img src="<?php echo $image_url[0] ?>" border="0" alt="Image of <?php echo $page->post_title ?>"/><?php if(strpos($bundlecontent, ".mp3")) {?> <div class="sprite icon-play position-bottom-right"></div><?php }?><span><?php echo $page->post_title ?></span></a>





    </div>

    <?php
  }



  ?>
</div>
<!-- Masonry tiles go here -->
<div class="clear-both margin-top-medium"></div>
<a name="more" id="more"></a>
<?php
	  //echo (int)$pagecount;
	  //echo "<br>".(int)$bundlenumber;

if ( (int)$pagecount >(int)$bundlenumber){
 if ($strshow != "all") {?>
 <div align="center"><a class="button  margin-bottom-large" href="?show=all#more">Show more</a></div>
 <?php
}else{
  ?>
  <div align="center"><a class="button  margin-bottom-large" href="<?php the_permalink();?>">Show less</a></div>
  <?php	  }}
  ?>


</div> <!-- end of breather -->
</div>
</div>

<div class="row">

  <div class="col starts-at-full ends-at-two-thirds box clr content-area">

   <div class="heading-holding-banner">
    <h2 class="section-heading"><span><span>
      <?php // the_field('subheading'); ?>
<?php if (in_category('education-competition')){
  the_title();
      echo(' competition');
}else{
   echo("About this classroom resource");
    }
?>
    </span></span></h2>
  </div>

  <div class="breather no-left-right-padding">
    <?php if(get_field('section-3')): ?>
    <?php if(get_field('document-link')): ?>

    <p><a href="<?php the_field('document-link'); ?>" class="button">Download documents and transcripts</a></p>
  <?php endif; ?>
  <h2 class="section-heading">Teachers' notes<a name="teachers-notes" id="teachers-notes"></a></h2>
  <?php the_field('section-3'); ?>

  <?php if(get_field('section-5')): ?>

  <div class="feature-box float-left width-full margin-bottom-large">
   <div class="breather pl-14">
    <h3>
      <?php the_field('section-5-heading'); ?><a name="additional-content" id="additional-content"></a>
    </h3>
    <?php the_field('section-5'); ?>
  </div></div>


<?php endif; ?>

<?php if(get_field('task-content')): ?>

  <h2 class="section-heading">Tasks<a name="tasks" id="tasks"></a></h2>
  <?php while(has_sub_field('task-content')): ?>
  <div class="feature-box float-left width-full margin-bottom-large">
    <div class="breather"> <?php echo the_sub_field('task-text'); ?> </div>
  </div>
<?php endwhile; ?>

<?php endif; ?>

<?php endif; ?>

<?php if(get_field('section-2')): ?><hr>
  <a name="introduction" id="introduction"></a>
  <h2>Introduction</h2>
  <?php the_field('section-2'); ?>

<?php endif; ?>
<?php if(get_field('section-4')): ?><hr>

  <h2>External links<a name="external-links" id="external-links"></a></h2>
  <?php the_field('section-4'); ?>

<?php endif; ?>

<a href="#top" class="button float-right margin-bottom-medium">Back to top</a>


<p>
<?php
//echo get_the_term_list( $post->ID, 'education resource','', ', ', '' );
?>
</p>

</div>
</div>


<div class="col starts-at-full ends-at-one-third box clr">
    <?php
  if(have_rows('video')) {
    require_once('inc/acf-templates/video-player.php');
  }
?>
 <div class="heading-holding-banner">
  <h2 class="section-heading"> <span> <span>Related resources </span> </span> </h2>
</div>
<div class="breather no-left-right-padding">

<?php if (get_field('related-resources')){?>
  <?php
  $post_objects = get_field('related-resources');

  if( $post_objects ):

?>
  <div class="pictorial-list grid-within-grid-one-item">
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
    <?php setup_postdata($post);

  $resourcequestion = "";

          if (get_field('subheading')){

      $resourcequestion = get_field('subheading');
          }
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id());?>

        <div class="resource-block margin-bottom-large">
          <a href="<?php the_permalink()?>" title="<?php the_title();?> - <?php echo ($resourcequestion);?>">
            <div class="has-background" <?php printf('style="background-image: url(%s)">', make_relative_path_from_url($image_url[0])); ?></div>

       <h3><?php the_title();?></h3></a>
              <?php
             if (get_field('subheading')){

             echo ($resourcequestion);
             }else{

            if (has_excerpt()){the_excerpt();}
             }
             ?>
           </div><!-- closes resource-block -->

  <?php endforeach; ?>
</div>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
</div><!-- closes breather -->
<div class="separator-illusion"></div>
<?php
  if(have_rows('media_link')) {
    require_once('inc/acf-templates/social-media-links.php');
  }
?>
</div><!-- closes col -->
<?php }?>

</div>

</div>
</div>

</div>
</div>
<!-- end page content -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>



