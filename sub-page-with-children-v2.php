<?php
/*
Template Name: Sub-section page with children Version 2
*/

get_header(); ?>


<div id="page_wrap" class="container" role="main">

  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>

  <!-- Page content -->
  <div class="row">
    <div class="col starts-at-full ends-at-full box clr">
      <div class="heading-holding-banner">
        <h1><span><span>
          Selecting and transferring records          </span> </span> </h1>
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

      // loop through the sub-pages of your custom post type
      $childpages = new WP_Query( array(
          'post_type'      => 'page',
          'post_parent'    => $page_id,
          'posts_per_page' => -1,
          'orderby'        => 'menu_order date',
          'order'          => 'ASC'
      ));

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
                <?php echo first_sentence(get_the_content()); ?>
            </div>


    </div>

      <?php endwhile; wp_reset_query(); ?>


        <!--<div class="col starts-at-full ends-at-half clr box">
      <div class="heading-holding-banner">
        <h2><span><span><a href="http://www.nationalarchives.gov.uk/information-management/manage-information/selection-and-transfer/digital-records-transfer/">Digital records transfer</a></span></span></h2>
      </div>
      <div class="breather">



          <p>
          If you wish to transfer digital records to The National Archives, please get in touch with your Information Management Consultant (IMC) or email our Information Management Team.        </p>
        <ul class="child">
          <li class="page_item page-item-2486"><a href="http://www.nationalarchives.gov.uk/information-management/manage-information/selection-and-transfer/digital-records-transfer/digital-transfer-steps/">Digital transfer steps</a></li>
<li class="page_item page-item-1606"><a href="http://www.nationalarchives.gov.uk/information-management/manage-information/selection-and-transfer/digital-records-transfer/guidance-forms-digital-transfer/">Guidance and forms for digital transfer</a></li>
<li class="page_item page-item-22483"><a href="http://www.nationalarchives.gov.uk/information-management/manage-information/selection-and-transfer/digital-records-transfer/file-formats-transfer/">File formats for transfer</a></li>

        </ul>
      </div>
    </div>-->
      </div>
</div>
</div>
<!-- end page content -->

<?php get_footer(); ?>


