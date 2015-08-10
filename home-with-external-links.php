<?php
/*
    Template Name: Home - External Links
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
            <?php the_title(); ?>
          </span> </span> </h1>
        </div>
        <div class="breather">

          <div class="grid-within-grid-two-item clr">

            <div>
              <?php the_content(); ?>
            </div>

             <!-- <div class="siblings-introduction-image">
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
<?php
    $prefix = 'tna_';

    $title = get_post_meta( $post->ID, $prefix.'text', true );
    $description = get_post_meta( $post->ID, $prefix. 'textarea', true );
    $image = get_post_meta( $post->ID, $prefix. 'image', true );
    $link = get_post_meta( $post->ID, $prefix. 'link', true );

    $titleTwo = get_post_meta( $post->ID, $prefix.'text_2', true );
    $descriptionTwo = get_post_meta( $post->ID, $prefix. 'textarea_2', true );
    $imageTwo = get_post_meta( $post->ID, $prefix. 'image_2', true );
    $linkTwo = get_post_meta( $post->ID, $prefix. 'link_2', true );

    $titleThree = get_post_meta( $post->ID, $prefix.'text_3', true );
    $descriptionThree = get_post_meta( $post->ID, $prefix. 'textarea_3', true );
    $imageThree = get_post_meta( $post->ID, $prefix. 'image_3', true );
    $linkThree = get_post_meta( $post->ID, $prefix. 'link_3', true );

    $titleFour = get_post_meta( $post->ID, $prefix.'text_4', true );
    $descriptionFour = get_post_meta( $post->ID, $prefix. 'textarea_4', true );
    $imageFour = get_post_meta( $post->ID, $prefix. 'image_4', true );
    $linkFour = get_post_meta( $post->ID, $prefix. 'link_4', true );

    $titleFive = get_post_meta( $post->ID, $prefix.'text_5', true );
    $descriptionFive = get_post_meta( $post->ID, $prefix. 'textarea_5', true );
    $imageFive = get_post_meta( $post->ID, $prefix. 'image_5', true );
    $linkFive = get_post_meta( $post->ID, $prefix. 'link_5', true );

    $titleSix = get_post_meta( $post->ID, $prefix.'text_6', true );
    $descriptionSix = get_post_meta( $post->ID, $prefix. 'textarea_6', true );
    $imageSix = get_post_meta( $post->ID, $prefix. 'image_6', true );
    $linkSix = get_post_meta( $post->ID, $prefix. 'link_6', true );

    $titleSeven = get_post_meta( $post->ID, $prefix.'text_7', true );
    $descriptionSeven = get_post_meta( $post->ID, $prefix. 'textarea_7', true );
    $imageSeven = get_post_meta( $post->ID, $prefix. 'image_7', true );
    $linkSeven = get_post_meta( $post->ID, $prefix. 'link_7', true );

    $titleEight = get_post_meta( $post->ID, $prefix.'text_8', true );
    $descriptionEight = get_post_meta( $post->ID, $prefix. 'textarea_8', true );
    $imageEight = get_post_meta( $post->ID, $prefix. 'image_8', true );
    $linkEight = get_post_meta( $post->ID, $prefix. 'link_8', true );

    $titleNine = get_post_meta( $post->ID, $prefix.'text_9', true );
    $descriptionNine = get_post_meta( $post->ID, $prefix. 'textarea_9', true );
    $imageNine = get_post_meta( $post->ID, $prefix. 'image_9', true );
    $linkNine = get_post_meta( $post->ID, $prefix. 'link_9', true );

    $titleTen = get_post_meta( $post->ID, $prefix.'text_10', true );
    $descriptionTen = get_post_meta( $post->ID, $prefix. 'textarea_10', true );
    $imageTen = get_post_meta( $post->ID, $prefix. 'image_10', true );
    $linkTen = get_post_meta( $post->ID, $prefix. 'link_10', true );

    $titleEleven = get_post_meta( $post->ID, $prefix.'text_11', true );
    $descriptionEleven = get_post_meta( $post->ID, $prefix. 'textarea_11', true );
    $imageEleven = get_post_meta( $post->ID, $prefix. 'image_11', true );
    $linkEleven = get_post_meta( $post->ID, $prefix. 'link_11', true );

    $titleTwelve = get_post_meta( $post->ID, $prefix.'text_12', true );
    $descriptionTwelve = get_post_meta( $post->ID, $prefix. 'textarea_12', true );
    $imageTwelve = get_post_meta( $post->ID, $prefix. 'image_12', true );
    $linkTwelve = get_post_meta( $post->ID, $prefix. 'link_12', true );

?>
    <div id="index" class="row">
        <?php if ( get_post_meta( $post->ID, $prefix. 'text', true ) ) {?>
            <div class="col starts-at-full ends-at-half clr box">
                <div class="heading-holding-banner">
                    <h2><span><span><a href="<?php echo $link ?>"><?php echo $title ?></a> </span></span></h2>
                </div>
                <div class="breather">
                    <a href="<?php echo $link ?>" title="<?php echo $title ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                            <img src="<?php echo $image ?>" /></div></a>
                    <p>
                        <?php echo $description ?>
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_2', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkTwo ?>"><?php echo $titleTwo ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkTwo ?>" title="<?php echo $titleTwo ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageTwo ?>" /></div></a>
                <p>
                    <?php echo $descriptionTwo ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_3', true ) ) {?>
            <div class="col starts-at-full ends-at-half clr box">
                <div class="heading-holding-banner">
                    <h2><span><span><a href="<?php echo $linkThree ?>"><?php echo $titleThree ?></a> </span></span></h2>
                </div>
                <div class="breather">
                    <a href="<?php echo $linkThree ?>" title="<?php echo $titleThree ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                            <img src="<?php echo $imageThree ?>" /></div></a>
                    <p>
                        <?php echo $descriptionThree ?>
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_4', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkFour ?>"><?php echo $titleFour ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkFour ?>" title="<?php echo $titleFour ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageFour ?>" /></div></a>
                <p>
                    <?php echo $descriptionFour ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_5', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkFive ?>"><?php echo $titleFive ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkFive ?>" title="<?php echo $titleFive ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageFive ?>" /></div></a>
                <p>
                    <?php echo $descriptionFive ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_6', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkSix ?>"><?php echo $titleSix ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkSix ?>" title="<?php echo $titleSix ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageSix ?>" /></div></a>
                <p>
                    <?php echo $descriptionSix ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_7', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkSeven ?>"><?php echo $titleSeven ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkSeven ?>" title="<?php echo $titleSeven ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageSeven ?>" /></div></a>
                <p>
                    <?php echo $descriptionSeven ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_8', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkEight ?>"><?php echo $titleEight ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkEight ?>" title="<?php echo $titleEight ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageEight ?>" /></div></a>
                <p>
                    <?php echo $descriptionEight ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_9', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkNine ?>"><?php echo $titleNine ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkNine ?>" title="<?php echo $titleNine ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageNine ?>" /></div></a>
                <p>
                    <?php echo $descriptionNine ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_10', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkTen ?>"><?php echo $titleTen ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkTen ?>" title="<?php echo $titleTen ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageTen ?>" /></div></a>
                <p>
                    <?php echo $descriptionTen ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_11', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkEleven ?>"><?php echo $titleEleven ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkEleven ?>" title="<?php echo $titleEleven ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageEleven ?>" /></div></a>
                <p>
                    <?php echo $descriptionEleven ?>
                </p>
            </div>
        </div>
        <?php } ?>
        <?php if ( get_post_meta( $post->ID, $prefix. 'text_12', true ) ) {?>
        <div class="col starts-at-full ends-at-half clr box">
            <div class="heading-holding-banner">
                <h2><span><span><a href="<?php echo $linkTwelve ?>"><?php echo $titleTwelve ?></a> </span></span></h2>
            </div>
            <div class="breather">
                <a href="<?php echo $linkTwelve ?>" title="<?php echo $titleTwelve ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                        <img src="<?php echo $imageTwelve ?>" /></div></a>
                <p>
                    <?php echo $descriptionTwelve ?>
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</div>
<!-- end page content -->
<?php get_footer(); ?>
