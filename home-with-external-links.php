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
                                                    <?php printf("%s<br /> <a href='%s' title='%s' target='_blank'>View in the image library</a>", get_sub_field('image_information_text'), get_sub_field('image_link_href'), get_sub_field('image_information_text') ) ?>
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
        for($i = 1; $i <= 12; $i++) {

            $prefix = 'tna_';

            $title = get_post_meta( $post->ID, $prefix.'text_' .$i, true );
            $description = get_post_meta( $post->ID, $prefix. 'textarea_' .$i, true );
            $image = get_post_meta($post->ID, $prefix .'image_' .$i, true);
            $link = get_post_meta( $post->ID, $prefix. 'link_' .$i, true );

            if (!empty($title)) { ?>
                <div class="col starts-at-full ends-at-half clr box <?php echo $i; ?>">
                    <div class="heading-holding-banner">
                        <h2><span><span><a href="<?php echo $link?>"><?php echo $title ?></a> </span></span></h2>
                    </div>
                    <div class="breather">
                        <a href="<?php echo $link ?>" title="<?php echo $title ?>"> <div class="float-right starts-at-full ends-at-half thumbnail-container-lrg">
                                <img src="<?php echo $image ?>" alt="<?php echo strtolower($title); ?>" /></div></a>
                        <p>
                            <?php echo $description[$i] ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
</div>
<!-- end page content -->
<?php get_footer(); ?>
