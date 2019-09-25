<?php
/*
Template Name: Online Exhibition
*/

get_header(); ?>


<?php


if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post();

        $image_id = get_post_thumbnail_id($page->ID);
        $image_url = wp_get_attachment_image_src($image_id,'full', false);




        ?>

<div id="page_wrap" class="container" role="main" >

  <!-- Breadcrumbs // Image descriptor -->

  <div class="row" id="exhibition-breadcrumbs">
    <?php include 'breadcrumb.php'; ?>

    <div class="sprite icon-img-desc position-top-right">
      <div class="image-description" style="display: block;">
        <?php
        //1.Banner-information custom field

        $banner_info =  get_post_meta(get_the_ID(), '1.Banner-information', TRUE);

        if ($banner_info){

            echo ($banner_info);


        }

        ?>
      </div>
    </div>


  </div>


<!-- All content goes here -->

  <div class="row exhibition-top">
  <div class="col starts-at-full ends-at-full">
   <div class="breather">
          <h1>
            <?php the_title();?></h1>
        </div>


  </div>

  <div class="col starts-at-full ends-at-full white-bg">

    <div class="col starts-at-full ends-at-full introduction">
    <div class="breather">
<?php the_content();?>
</div></div>

<!--   <div class="col starts-at-full ends-at-half">-->
<!--    <div class="breather">-->
<!---->
<!--Additional content?-->
<!---->
<!--</div></div>-->


  </div>



  <div class="col starts-at-full ends-at-full">


    <div id="documents">

<!-- document tiles in a masonry style -->
<div id="document-container">

  <?php
        $pages = get_pages('sort_column=menu_order&child_of='.$post->ID.'&parent='.$post->ID.'');

        foreach($pages as $page)
        {
            $title = $page->post_title;

            ?>


<!-- documents in loop -->



<div class="dark-grey-border box-small document-box">
  <div class="secret-box">


      <div class="secret-title"><h2><a href="<?php echo get_page_link($page->ID); ?>" title="<?php echo ($title);?>"><?php echo ($title);?></a></h2>
          <p>  <?php if ( empty( $page->post_excerpt ) ) {
                  echo first_sentence($page->post_content);
              } else {
                  echo $page->post_excerpt;
              }


              ?>
          </p></div>

      <?php

      $thumb_id = get_post_thumbnail_id($page->ID);
      $thumb_url = wp_get_attachment_image_src($thumb_id,'medium', false);

      if ($thumb_url){

          ?>


      <a href="<?php echo get_page_link($page->ID); ?>" title="<?php echo ($title);?>"><img src="<?php echo(make_relative_path_from_url($thumb_url[0])); ?>" alt="<?php echo ($title);?>"></a>

<?php }?>
</div>

</div>

<!-- documents in loop -->

        <?php
        }

        ?>

<!-- container ends-->
<div class="clear-both"></div>
</div>
</div>
</div>
<!-- document tiles in a masonry style -->




  </div>




  <!-- end col -->
</div>




<!-- All content goes here -->
</div>








<?php endwhile; ?>
<?php endif; ?>

<!-- Custom stylesheets -->


<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/online-exhibition.css?=timestamp=<?php echo(time());?>">
<?php    if ($image_url){?>
    <style>

        body{
            background-image: url(<?php echo(make_relative_path_from_url($image_url[0])); ?>);
            background-repeat: no-repeat;

        }

    </style>
<?php }?>


<!--[if lte IE 9]>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/tna/css/online-exhibition-ie.css">
<![endif]-->


<?php get_footer(); ?>



