<?php
/*
Template Name: 2 Section page with children
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
<div class="row" id="index">
      <?php
      $page_id=get_the_ID(); //Gets the id for the current page.

      // loop through the sub-pages for the current page.
      $childpages = new WP_Query( array(
          'post_type'      => 'page',
          'post_parent'    => $page_id,
          'posts_per_page' => -1,
          'orderby'        => 'menu_order date',
          'order'          => 'ASC'
        )
      );

      while($childpages->have_posts()) : $childpages->the_post();

      ?>

       <div class="col starts-at-full ends-at-half clr box">
        <div class="heading-holding-banner">
          <h2><span>
                  <span>
                      <a href="<?php echo get_page_link(); ?>">
                          <?php the_title(); ?>
                      </a>
                  </span>
              </span>
          </h2>
        </div>
        <div class="breather">
           <?php
              $image_id = get_post_thumbnail_id($page->ID);
              $image_url = wp_get_attachment_image_src($image_id,'', false);

              if ($image_url){
           ?>
           <a href="<?php echo get_page_link($page->ID) ?>" title="<?php echo $page->post_title ?>">
               <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg" style="background-image: url(<?php echo($image_url[0]); ?>); background-repeat: no-repeat">
               </div>
           </a>
           <?php
             }
           ?>
           <p>
             <?php //echo first_sentence(get_the_content());
                 if ( has_excerpt( $post->ID ) ) {
                     echo the_excerpt();
                 } else {
                     echo first_sentence(get_the_content());
                 }
             ?>
           </p>
           <ul class="child">
              <?php
                  $child_page_id=get_the_ID();
                  // loop through the sub-pages for each child page as grandchildren.
                    $grandchildrenpages = new WP_Query( array(
                      'post_type'      => 'page',
                      'post_parent'    => $child_page_id,
                      'posts_per_page' => -1,
                      'orderby'        => 'menu_order date',
                      'order'          => 'ASC'
                          )
                        );
              while($grandchildrenpages->have_posts()) : $grandchildrenpages->the_post();
              ?>
                 <li class="page_item">
                    <a href="<?php echo get_page_link(); ?>">
                          <?php the_title(); ?>
                    </a>
                 </li>
              <?php endwhile; wp_reset_query(); ?>
           </ul>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>

  </div>
</div>
</div>
<!-- end page content -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
