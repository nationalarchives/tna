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
  
  <div class="row" id="breadcrumb-holder">
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

  <div class="row">
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


      <div class="secret-title"><a href="<?php echo get_page_link($page->ID); ?>" title="<?php echo ($title);?>"><h2><?php echo ($title);?></h2></a>
          <p>  <?php if ( empty( $page->post_excerpt ) ) {
                  echo first_sentence($page->post_content);
              } else {
                  echo $page->post_excerpt;
              }


              ?>
          </p></div>

      <?php

      $thumb_id = get_post_thumbnail_id($page->ID);
      $thumb_url = wp_get_attachment_image_src($thumb_id,'full', false);

      if ($thumb_url){

          ?>


      <a href="<?php echo get_page_link($page->ID); ?>" title="<?php echo ($title);?>"><img src="<?php echo($thumb_url[0]); ?>" alt="<?php echo ($title);?>"></a>

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






<div class="container margin-top-medium"> 
  <div class="row">

    <div class="col starts-at-full ends-at-half ">
    <div class="breather margin-top-medium margin-right-medium outline">
        <h2>Extra content 1</h2>

</div>



</div>


    <div class="col starts-at-full ends-at-half">


  <div class="breather margin-top-medium outline">
        <h2>Bookshop</h2>

  <div class="img-box ">
<a href="http://bookshop.nationalarchives.gov.uk/9780091943356/Secrets-Of-The-National-Archives/" title="Visit The National Archives' bookshop website"><img src="http://images.nitrosell.com/product_images/15/3652/9780091943356.jpg" width="100" height="200" alt="Image of Secrets of The National Archives by Richard Taylor" class="dark-grey-border"></a>
</div>
  <div class="img-box">
<a href="http://bookshop.nationalarchives.gov.uk/9781781311639/The-Greatest-Traitor/" title="Visit The National Archives' bookshop website"><img src="http://images.nitrosell.com/product_images/15/3652/9781781311639.jpg" width="100" height="200" alt="Image of The Greatest Traitor by Roger Hermiston" class="dark-grey-border"></a>
</div>
  <div class="img-box">
<a href="http://bookshop.nationalarchives.gov.uk/9781472904935/Britain%27s-X-traordinary-Files/" title="Visit The National Archives' bookshop website"><img src="http://images.nitrosell.com/product_images/15/3652/9781472904935.jpg" width="100" height="200" alt="Image of Maps Their Untold Stories by Rose Mitchell &amp; Andrew Janes" class="dark-grey-border"></a>
</div>
<div class="clear-both"></div>
<p>Discover more books about these documents in The National Archives' <a href="http://bookshop.nationalarchives.gov.uk/Inspired-by-our-collection/Portillo%27s-state-secrets/" title="Visit The National Archives' bookshop website"> bookshop</a>.</p>
</p>
</div>


</div>
</div>
</div>





<?php endwhile; ?>
<?php endif; ?>

<!-- Custom stylesheets -->


<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/online-exhibition.css?=timestamp=<?php echo(time());?>">
<?php    if ($image_url){?>
    <style>

        body{
            background-image: url(<?php echo($image_url[0]); ?>);
            background-repeat: no-repeat;

        }

    </style>
<?php }?>




<?php get_footer(); ?>

<script src="<?php bloginfo("stylesheet_directory");?>/scripts/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/scripts/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/scripts/jquery.bxslider.min.js"></script>

<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/document-microsite-ie.css">
<![endif]-->
