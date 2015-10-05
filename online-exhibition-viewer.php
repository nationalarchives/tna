<?php
/*
Template Name:Online Exhibition Document Viewer

*/
get_header();
?>

<div id="page_wrap" class="container" role="main" >

    <!-- Breadcrumbs // Image descriptor -->

    <div class="row" id="breadcrumb-holder">
        <?php include 'breadcrumb.php'; ?>
    </div>




<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post();?>

  <div class="starts-at-full ends-at-full white-bg margin-bottom-large">
<div class="breather">

    <h1 class="margin-none margin-bottom-medium"><?php the_title();?></h1>
    <?php
        $image_id = get_post_thumbnail_id($post->ID);
        $image_url = wp_get_attachment_image_src($image_id,'full', false);

    $image_caption = get_posts(array('p' =>  $image_id, 'post_type' => 'attachment'));



        if ($image_url) {
            ?>



            <div class="document-viewer">
                <?php


                echo '<a href="' . $image_url[0] . '" title="' . $image_caption[0]->post_title  . '" target="_blank" >';
                ?>
                <div style="background-image: url(<?php echo($image_url[0]); ?>); background-repeat: no-repeat"
                     class="document-full"></div>

                <div class="overlay">
                    <div class="margin-small clr">
                        <a href="<?php echo($image_url[0]); ?>" title="View full image of <?php echo ($image_caption[0]->post_title);?>"
                           target="_blank" class="button float-right">View full image</a>
                    </div>
                </div>
                <?php
                echo '</a>';
                ?>


            </div>

        <?php

        }?>



<!--       <img src="--><?php //echo($thumb_url[0]); ?><!--" alt="--><?php //echo ($title);?><!--">-->



    <p>
        <?php the_content();?>

</p>
    <?php

    $parent = $post->ID;

    //echo ($parent);

    $Dquery = new WP_Query();
    $Dquery->query('sort_column=menu_order&post_parent='.$parent.'&post_type=page');

    $Dcount = $Dquery->post_count;

//echo ($Dcount);
    ?>

</div>

<?php





        if ($Dcount >= 1) {

            ?>

<div class="document-navigation">

  <div class="document-slides">
     <div class="breather"> <h2>Explore the documents</h2></div>
<span id="slider-prev"></span>
<span id="slider-next"></span>
<div class="bxslider">
<!-- thumbs go here -->
<?php
    while ($Dquery->have_posts()) : $Dquery->the_post();


        $image_id = get_post_thumbnail_id();
        $image_url = wp_get_attachment_image_src($image_id, 'medium', false);

        ?>
        <a href="<?php echo get_page_link($Dquery->ID);  ?>">
            <div class="document-slide-thumb dark-grey-border" <?php printf('style="background-image: url(%s)"', $image_url[0]); ?>></div>
            <div><p align="center"><?php echo get_the_title( $Dquery->ID );?></p></div>
        </a>

    <?php
    endwhile;
    wp_reset_postdata();

   ?>
<!-- thumbs go here -->

</div>




  </div>
<div class="clear-both"></div>










</div>

      <?php }?>

      <div class="clear-both"></div>

      <?php

      // This gets the parent page ID
      $parentid = $post->post_parent;

      // This gets the link to the parent page, based on the parent page ID
      $parentpermalink = get_permalink($parentid); ?>

      <a class="margin-medium button float-right" href="<?php echo $parentpermalink; ?>">Return to <?php echo get_the_title($parentid);?></a>
      <div class="clear-both"></div>
</div>

<?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>
<script src="<?php bloginfo("stylesheet_directory");?>/scripts/jquery.bxslider.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/css/online-exhibition.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_directory");?>/css/jquery.bxslider.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/document-microsite-ie.css">
<![endif]-->



<script type="text/javascript">
jQuery(document).ready(function($) {

   var dslider=  $('.bxslider').bxSlider({
  minSlides: 1,
  maxSlides: 4,
  slideWidth: 200,
  slideMargin: 10, pager: true,
  responsive:true,
  preloadImages:'visible',
  controls:true,
  infiniteLoop:false,
  hideControlOnEnd:true,
  nextSelector: '#slider-next',
  prevSelector: '#slider-prev',
  nextText: '<i class="fa fa-chevron-right fa-4x"></i>',
  prevText: '<i class="fa fa-chevron-left fa-4x"></i>'
});   

    });




</script>