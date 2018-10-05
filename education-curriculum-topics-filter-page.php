<?php

/*
Template Name: Education Curriculum Topics Filter Page
*/

get_header();

function get_all_curriculum_topics() {
	return get_terms('curriculum-topics');
}

function get_current_selected_topic ($selected_topic_slug) {
	foreach (get_all_curriculum_topics() as $term ) {
		if ($term->slug == $selected_topic_slug) {
			return $term;
		}
	}
	return null;
}

function get_education_resource_tag_type ($term) {;
	if (in_array($term->slug, ["ks1", "ks2", "ks3", "ks4", "ks5"])) {
		return "key-stage";
	} elseif (in_array($term->slug, ["early-20th-century", "early-modern", "empire-and-industry", "interwar", "medieval", "postwar", "second-world-war", "victorians"])) {
		return "time-period";
	} elseif (in_array($term->slug, ["classroom-resource", "downloads-for-teachers", "focussed-topics", "games", "lesson", "sessions-we-teach", "themed-collection","video-conferences", "virtual-classroom", "workshop"])) {
		return "resource-type";
	} else {
		return "";
	}
}


$current_selected_topic = null;

if ($_GET['curriculum-topic']) {
	$current_selected_topic = get_current_selected_topic($_GET['curriculum-topic']);
}

$the_query = new WP_Query(
	array(
		'post_type' => 'page',
		'posts_per_page' => '250',
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'curriculum-topics',
				'field' => 'slug',
				'terms' => $current_selected_topic->slug,
				'operator' => 'IN'
			)
		),
		'orderby'=> 'title',
		'order' => 'ASC'
	)
);

$query_count = $the_query->found_posts;


?>

<div id="page_wrap" class="container" role="main">
	<!-- Breadcrumbs -->
	<?php include 'breadcrumb.php'; ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col starts-at-full box clr">
					<div class="heading-holding-banner">
						<h1>
                            <span>
                                <span>
                                    <?php echo ($current_selected_topic->name=="") ? get_the_title() : $current_selected_topic->name ;?>
                                </span>
                            </span>
						</h1>
					</div>
                    <div class="breather">
                        <?php echo (empty($current_selected_topic->description)) ? get_the_content() : $current_selected_topic->description ; ?>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="starts-at-full">
					<form id="resources-form" name="resources-form" method="get" action="#">
						<div class="select-float preload">
							<h2>Filter by</h2>
							<select name="curriculum-topic" title="curriculum-topic">
								<optgroup label="Curriculum topic">
                                    <option value=""
										<?php if ( $current_selected_topic->slug == "" ) {echo "selected";}?>>
                                        Select a topic
                                    </option>
									<?php
									foreach ( get_all_curriculum_topics() as $term ) { ?>
										<option value="<?php echo $term->slug ?>"
											<?php if ( $current_selected_topic->slug == $term->slug ) {echo "selected";}?>>
											<?php echo $term->name ?>
										</option>
									<?php } ?>
							</select>
							<noscript>
								<input type="submit" value="Apply filter">
							</noscript>
						</div>
					</form>

				</div>
			</div>
			<div class="row">
				<div class="col starts-at-full ends-at-full box clr">
					<div class="heading-holding-banner">
						<h2>
                            <span>
                                <span>
                                    All <?php echo ucfirst(strtolower($current_selected_topic->name)); ?> resources
                                </span>
                            </span>
						</h2>
					</div>
					<div class="breather">
						<?php
						if (empty($query_count)) {
							echo ("Try selecting a menu option to find what you're looking for or <a href='/education/sessions-and-resources/' title='View all Education sessions and resouces'>view all our resources</a>.");
						}else{
							echo "Showing ".$query_count ." resource";
							if ($query_count > 1){ echo("s"); };
							echo('<div class="pad-bottom-medium"></div>');
						}
						?>
						<div id="index" class="pictorial-list grid-within-grid-three-item resource-results">
							<?php
							while ( $the_query->have_posts() ) : $the_query->the_post();
							$image_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image_id,'thumbnail', false);
							$terms = wp_get_post_terms( get_the_ID() , 'education resource' );
							$resourcequestion = get_field('subheading') ? get_field('subheading') : "";
							?>
							<div class="resource-block">
								<a href="<?php the_permalink()?>" title="<?php the_title();?> - <?php echo ($resourcequestion);?>">
									<div class="has-background" <?php printf('style="background-image: url(%s)"', $image_url[0]);?>>
                                        <?php
                                        foreach($terms as $term) {
                                            if (strtolower($term->slug) == "classroom-resource"){
                                                echo("<div class='type-label bg-peach'><span>Classroom resource</span></div>");
                                            }
                                            if (strtolower($term->slug) == "sessions-we-teach"){
                                                echo("<div class='type-label bg-mint'><span>Session we teach</span></div>");
                                            }
                                        }
                                        ?>
							        </div>
                                    <h3 class="pad-none pad-bottom-small"><?php the_title();?></h3>
                                </a>
							<div class="pad-bottom-medium"><?php echo ($resourcequestion);?></div>

							<?php if (!empty(get_the_tags())) { ?>
								<span class="entry-meta float-left pad-bottom-large">
                                    Tags:
                                    <?php
									$terms = get_the_terms( $post->ID, 'education resource');
									foreach ($terms as $term) {
										if (get_education_resource_tag_type($term) != null) {
											echo "<span class='tag'><a href='/education/sessions-and-resources/?".get_education_resource_tag_type($term)."=".$term->slug."'>".$term->slug."</a></span>";
										}
									}
									?>
                                </span>
							<?php } ?>

						</div>

					<?php endwhile;


					wp_reset_query(); ?>
						<div class="clear-both">  </div>

					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

</div>
</div>

<?php get_footer(); ?>
