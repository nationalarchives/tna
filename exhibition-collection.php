<?php
/*
Template Name: Exhibition Collection
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
<?php
$pagecontent = apply_filters( 'the_content', get_the_content() );
?>
        </div>
        <div class="breather no-left-right-padding">


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
    <h2 class="section-heading">

        About  <?php the_title(); ?>
    </h2>

       <?php echo ($pagecontent); ?>
  </div>


</div>


<div class="col starts-at-full ends-at-one-third box clr">
<?php if (is_page('letters-of-lockdown')){?>
 <div class="heading-holding-banner">
  <h2 class="section-heading"> <span> <span>You might also like </span> </span> </h2>
</div>
<div class="breather no-left-right-padding">



  <div class="pictorial-list grid-within-grid-one-item">


        <div class="resource-block margin-bottom-large">
          <a href="https://www.nationalarchives.gov.uk/with-love/" title="With Love">
            <div class="has-background" style="background-image: url('https://www.nationalarchives.gov.uk/images/home/menu-with-love.jpg');"></div>

       <h3>With Love</h3></a>

           </div><!-- closes resource-block -->


</div>

</div><!-- closes breather -->
<div class="separator-illusion"></div>
    <?php }?>
</div><!-- closes col -->


</div>

</div>
</div>

</div>
</div>
<!-- end page content -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>



