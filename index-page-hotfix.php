<?php
/*
Template Name: 2 Section page with children (HOTFIX)
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
        <div class="breather">

          <div class="grid-within-grid-two-item clr"> 

            <div>
              <?php the_content(); ?>
            </div>  

<!--             <div class="siblings-introduction-image">
              <div class="section-image position-relative">
                <div class="sprite icon-img-desc position-top-right">
                  <div class="image-description">
                    Lorem ipsum dolor <a href="" title="">sit amet</a>
                  </div>
                </div>
              </div>                                    
            </div> -->

            <?php if(get_field('sibling_introduction_image_information')): ?>
              <?php while(has_sub_field('sibling_introduction_image_information')): ?>
                <div <?php printf("class='siblings-introduction-image %s'", get_sub_field('class_for_background_image')); ?> >
                  <div class="siblings-introduction-image">
                    <div class="section-image position-relative">
                    <?php if (get_sub_field('image_link_href')){?>
                      <div class="sprite icon-img-desc position-bottom-right-image">
                        <div class="image-description">
                          <?php printf("%s<br /> <a href='%s' title='%s' target='_blank'>View in the Image Library</a>", get_sub_field('image_information_text'), get_sub_field('image_link_href'), get_sub_field('image_information_text') ) ?>
                        </div>
                      </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>     
            <?php endif; ?>

            <style type="text/css">
              .siblings-introduction-image {
                min-height: 180px;
              }
            </style>

      </div><!-- closes grid-within-grid -->

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
     continue;
   $content = apply_filters('the_content', $content);
   ?>
   <div class="col starts-at-full ends-at-half clr box">
    <div class="heading-holding-banner">
      <h2><span><span><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a> </span></span></h2>
    </div>
    <div class="breather">

        <?php

        $image_id = get_post_thumbnail_id($page->ID);
        $image_url = wp_get_attachment_image_src($image_id,'full', false);

        if ($image_url){

            ?>
        <a href="<?php echo get_page_link($page->ID) ?>" title="<?php echo $page->post_title ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg" style="background-image: url(<?php echo($image_url[0]); ?>); background-repeat: no-repeat">
                </div></a>
<?php

        }

        ?>


      <p>
        <?php if ( empty( $page->post_excerpt ) ) {
         echo first_sentence($page->post_content);
       } else { 
         echo $page->post_excerpt;
       } 


       ?>
     </p>
     <ul class="child">
      <?php 


//      wp_list_pages('child_of='.$page->ID.'&title_li&sort_column=menu_order&depth=1');

      ?>
    </ul>
  </div>
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
