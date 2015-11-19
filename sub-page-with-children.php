<?php
/*
Template Name: Sub-section page with children
*/

get_header(); ?>


<div id="page_wrap" class="container" role="main">

  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>

  <!-- Page content -->
  <div class="row">
    <div class="col starts-at-full ends-at-full box clr">
      <div class="heading-holding-banner">
        <h1>
            <span>
                <span>
                    <?php the_title(); ?>
                </span>
            </span>
        </h1>
      </div>
      <div class="breather">
        <div class="col starts-at-full ends-at-two-thirds clr">
         <?php the_content(); ?>
        </div>

          <?php  //if (get_field("feature-box")){?>

        <div class="col starts-at-full ends-at-one-third clr feature-box">
          <div class="breather">
              <?php the_field('feature-box'); ?>
          </div>
        </div>

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
                 if ( empty( $page->post_excerpt ) ) {
                     echo first_sentence(get_the_content());
                 } else {
                     echo $page->post_excerpt;
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
<?php get_footer(); ?>


