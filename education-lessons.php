<?php
/*
Template Name: Education - Lessons
*/
get_header(); ?>
<?php if ( is_singular() && has_post_thumbnail( $post->ID )) :
	$thumb_id = get_post_meta($post->ID, '_thumbnail_id', true);
	$thumb_url = make_relative_path_from_url(wp_get_attachment_url($thumb_id)); ?>
    <style type="text/css">
        #content-banner {
            background-image: url("<?php echo $thumb_url ;?>");
        }

    </style>
<?php endif;?>

<div id="page_wrap" class="container education-lessons" role="main">
    <!-- Breadcrumbs -->
	<?php include 'breadcrumb.php'; ?>
	<?php
	if ( have_posts() ) :
	?>
	<?php while ( have_posts() ) : the_post(); ?>

    <!-- content goes here -->
    <a name="top"></a>
    <div class="row">
        <div class="col starts-at-full ends-at-two-thirds box clr">
            <div id="content-banner" class="image-container small position-relative separator pad-top-medium">
                <h1><?php the_title(); ?></h1>
                <div class="position-top-right">
                    <button type='button' class="sprite icon-img-desc float-left" aria-label="View image description" aria-expanded="false">
                        <span class="sr-only">View image description</span>
                    </button>
                    <div class="image-description" style="display: block;" aria-hidden="true">
                        <?php the_field('banner-image-description'); ?>
                    </div>
                </div>
                <div class="overlay">
                    <div class="clr link-black">
						<?php if(get_field('document-link')): ?>
                            <a href="<?php the_field('document-link'); ?>" target="_blank" title="Opens in a new window">View lesson as PDF</a>
						<?php endif; ?>
						<?php
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
						echo '<a href="' . make_relative_path_from_url($large_image_url[0]) . '" title="View full image - ' . the_title_attribute('echo=0') . '" target="_blank" >';
						?>
                        View full image <?php echo '</a>';?>
                        <!--[if IE 7]><!--><div class="clear"></div><!--<![endif]-->
                    </div>
                </div>
            </div>
            <!-- at a glance small screen start -->
                <?php if (function_exists("display_education_side_box")) {
                    echo display_education_side_box("lesson-at-a-glance");
                }  ?>
            <!--  at a glance small screen end  -->

            <div class="heading-holding-banner">
                <h2><span><span>
          <?php the_field('subheading'); ?>
          </span></span></h2>
            </div>
            <div class="breather article clr no-left-right-padding">
                <ul class="quadruplets width-full pad-bottom-large no-float education-lessons-ul link-list">
					<?php if(get_field('task-content')): ?>
                        <li><a href="#tasks">Tasks</a></li>
					<?php endif; ?>
					<?php if(get_field('section-2')): ?>
                        <li><a href="#background">Background</a></li>
					<?php endif; ?>
					<?php if(get_field('section-3')): ?>
                        <li><a href="#teachers-notes">Teachers' notes</a></li>
					<?php endif; ?>
					<?php if(get_field('section-4')): ?>
                        <li><a href="#external-links">External links</a></li>
					<?php endif; ?>
					<?php if(get_field('section-5')): ?>
                        <li><a href="#additional-content">
								<?php the_field('section-5-heading'); ?>
                            </a></li>
					<?php endif; ?>
                </ul>
				<?php the_content(); ?>
				<?php if(get_field('task-content')): ?><hr>
                    <a name="tasks"></a>
                    <h3>Tasks</h3>
					<?php while(has_sub_field('task-content')): ?>
                        <div class="feature-box width-full margin-bottom-large">
                            <div class="clr margin-right-large margin-left-large padding-top-18"> <?php echo the_sub_field('task-text'); ?>


								<?php
								if (is_array(get_sub_field('task_source'))):
									foreach(get_sub_field('task_source') as $source):
										$image_id = wp_get_attachment_image_src(get_post_thumbnail_id($source->ID));
										$image_url = make_relative_path_from_url($image_id['0']); ?>
                                        <div class="subtext margin-none margin-bottom-large subtext-image-inline-block"><a href="<?php echo get_permalink($source->ID); ?>">
                                                <div class="thumbnail-container margin-right-small margin-bottom-medium" style="background-image: url(<?php echo $image_url ?>);"></div><?php echo get_field('display-title', $source->ID); ?></div>
                                        </a>
									<?php endforeach;
								endif;?>


                            </div>
                        </div>

					<?php endwhile; ?>
				<?php endif; ?>
				<?php if(get_field('section-2')): ?><hr>
                    <a name="background"></a>
                    <h3>Background</h3>
					<?php the_field('section-2'); ?>
				<?php endif; ?><hr>
				<?php if(get_field('section-3')): ?>
                    <a name="teachers-notes"></a>
                    <h3>Teachers' notes</h3>
					<?php the_field('section-3'); ?>
				<?php endif; ?><hr>
				<?php if(get_field('section-4')): ?>
                    <a name="external-links"></a>
                    <h3>External links</h3>
					<?php the_field('section-4'); ?>
				<?php endif; ?>
				<?php if(get_field('section-5')): ?>
                    <a name="additional-content"></a>
                    <h3>
						<?php the_field('section-5-heading'); ?>
                    </h3>
					<?php the_field('section-5'); ?>

				<?php endif; ?>
                <a href="#top" class="button float-right">Back to top</a>
            </div>
        </div>

        <!-- related resources -->
        <div class="col starts-at-full ends-at-one-third clr box">
            <!-- at a glance large screen start -->
                <?php if (function_exists("display_education_side_box")) {
                    echo display_education_side_box("lesson-at-a-glance");
                }  ?>
            <!--  at a glance large screen end  -->
            <?php if (get_field('related-resources')){?>
            <div class="heading-holding-banner">
                <h2> <span> <span>Related resources </span> </span> </h2>
            </div>
            <div class="breather no-left-right-padding">
				<?php
				$post_objects = get_field('related-resources');

				if( $post_objects ): ?>
                <div class="pictorial-list grid-within-grid-one-item">
					<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post);
					$resourcequestion = "";

					if (get_field('subheading')){

						$resourcequestion = get_field('subheading');
					}


					$image_url = make_relative_path_from_url(wp_get_attachment_image_src( get_post_thumbnail_id()));?>
                    <div class="resource-block margin-bottom-small"><a href="<?php the_permalink()?>" title="<?php the_title();?> - <?php echo ($resourcequestion);?>"><div class="has-background" <?php printf('style="background-image: url(%s)">', $image_url[0]); ?></div>
                    <h3 class="margin-bottom-small"><?php the_title();?></h3></a>
                    <p><?php
						if (get_field('subheading')){

							echo ($resourcequestion);
						}else{

							if (has_excerpt()){the_excerpt();}
						}
						?>
                    </p>
                </div>
			<?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>

            </div>

        </div>
    </div><?php }?>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>
