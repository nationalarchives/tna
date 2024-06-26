<?php
/*
Template Name: News Filter Page
*/
get_header();

/* variables go here */

$stryear       = ( isset( $_GET["news-year"] ) ) ? filter_input( INPUT_GET, "news-year", FILTER_SANITIZE_FULL_SPECIAL_CHARS ) : null;
$strtype       = ( isset( $_GET["news-type"] ) ) ? filter_input( INPUT_GET, "news-type", FILTER_SANITIZE_FULL_SPECIAL_CHARS ) : null;
$strtag        = ( isset( $_GET["news-tag"] ) ) ? filter_input( INPUT_GET, "news-tag", FILTER_SANITIZE_FULL_SPECIAL_CHARS ) : null;
$strview       = ( isset( $_GET["news-view"] ) ) ? filter_input( INPUT_GET, "news-view", FILTER_SANITIZE_FULL_SPECIAL_CHARS ) : null;
$strurl        = $_SERVER['SERVER_NAME'];
$strpostparent = "24072";

if ( $strview == "child" ) {
	$strpostparent = "";
}

if ( $strtype == "" ) {
	$strtype = "news";
}

?>


	<div id="page_wrap" class="container" role="main">
		<!-- Breadcrumbs -->
		<?php include 'breadcrumb.php'; ?>
		<main role="application">
			<div class="row">
				<div class="col starts-at-full box clr">
					<div class="heading-holding-banner">
						<h1><span><span>News</span></span></h1>
					</div>
					<!--end heading-holding-banner -->

					<!-- FILTERS -->
					<?php $formLink = str_replace('http://', 'https://', get_permalink()); ?>
					<form action="<?php echo $formLink ?>" method="get" name="resources-form" id="resources-form">
						<div class="select-float preload">
							<h2>Filter by</h2>
							<label for="news-year" class="sr-only">News year</label>
							<select class="starts-at-full ends-at-one-quarter margin-small" name="news-year" id="news-year">
								<option value="" selected="selected">All years</option>
									<option value="2017" <?php if ( $stryear == "2017" ) {
										echo "selected";
									} ?>>2017
									</option>
									<option value="2018" <?php if ( $stryear == "2018" ) {
										echo "selected";
									} ?>>2018
									</option>
								<?php if ( date( "Y" ) == "2019" ) { ?>
									<option value="2019" <?php if ( $stryear == "2019" ) {
										echo "selected";
									} ?>>2019
									</option>
								<?php } ?>
							</select>
							<label for="news-type" class="sr-only">News type</label>
							<select class="starts-at-full ends-at-one-quarter margin-small" name="news-type" id="news-type">
								<option value="news" selected="selected">All news</option>
								<option value="document-releases" <?php if ( $strtype == "document-releases" ) {
									echo "selected";
								} ?>>Document releases
								</option>
							</select>
							<noscript>
								<input type="submit" value="Apply filter">
							</noscript>
							<a id="remove-all-filters" class="close starts-at-full ends-at-one-quarter"
							   title="Remove all filters" href="<?php the_permalink(); ?>">Remove all filters</a></div>
						<!--end select-float -->
					</form>

					<!-- FILTER RESULTS -->
					<div class="breather no-left-right-padding">
						<h2>
							<?php
							if ( $strtype == "document-releases" ) {
								echo( "Document releases" );
							} else {
								if ( $stryear == date( "Y" ) /*and $strmonth == date("m")*/ ) {
									echo( "Latest news" );
								} else {
									echo( "News" );
									if ( $stryear != "" ) {
										echo( " " . $stryear );
									}
								}
							}
							if ( $strtag != "" ) {
								$strtaglabel = str_replace( "-", " ", $strtag );
								echo( " for <b>" . $strtaglabel . "</b>" );
							}
							?>
						</h2>
						<?php
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						if ( $strtag ) {
							query_posts( array(
								'tag'            => $strtag,
								'category_name'  => $strtype,
								'posts_per_page' => 12,
								'post_parent'    => $strpostparent,
								'paged'          => $paged
							) );
							$strnopaging = 0;
						} else {
							query_posts( array
								(
									'category_name'  => $strtype,
									'posts_per_page' => 12,
									'year'           => $stryear,
									'post_parent'    => $strpostparent,
									'paged'          => $paged
								)
							);
							$strnopaging = 0;
						}
						$strpostcount = $wp_query->found_posts;
						if ( $stryear == date( "Y" ) /*and $strmonth == date("m")*/ and $strpostcount == 0 and $strtag == "" ) {
							wp_reset_query();
							query_posts( array(
									'category_name'  => $strtype,
									'posts_per_page' => 6,
									'paged'          => $paged,
									'post_parent'    => $strpostparent
								)
							);
							echo( "<p>No news stories found. The most recent new stories are being displayed.</p>" );
							$strnopaging = 1;
						}

						?>
						<div class="pictorial-list grid-within-grid-three-item resource-results" id="index_height">
							<!-- begin news loop -->
							<?php
							if ( have_posts() ) : while ( have_posts() ) :
							the_post();

							$image_url      = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail', false );
							$strparenttitle = get_the_title( $post->post_parent );
							?>
							<div class="resource-block" style="height: auto;">
								<a href="<?php fix_internal_url( the_permalink() ); ?>" title="<?php the_title(); ?>">
									<div class="has-background" <?php printf( 'style="background-image: url(%s)">', fix_internal_url( $image_url[0] ) ); ?>
										<?php if ( in_category( "document-releases" ) ) { ?>
											<div class="overlay-type-label">Document release</div>
										<?php } ?>
									</div>
									<h3 class="margin-bottom-small"><?php the_title(); ?></h3>
								</a>
								<span class="entry-meta"><?php the_time( 'j F Y' ) ?></span>
								<div class="margin-top-medium margin-bottom-medium">
									<?php
									if ( empty( $post->post_excerpt ) ) {
										$strcontent = get_the_content();
										$strcontent = strip_tags( $strcontent );
										$strcontent = strip_shortcodes( $strcontent );
										echo substr( $strcontent, 0, strpos( $strcontent, ' ', 150 ) );
										echo( "..." );
									} else {
										$strcontent = get_the_excerpt();
										$tagstotrim = array( "<p>", "</p>" );
										$strcontent = str_replace( $tagstotrim, "", $strcontent );
										echo( $strcontent );
									}
									?>
								</div>
								<?php $strparenttitleforloop = get_the_title( $post->post_parent ); ?>
								<p class="news-tags">
									<?php $terms = wp_get_post_terms( $post->ID );
									$i = 0;
									if ( $terms ) {
										echo( "Tags: " );
										foreach ( $terms as $term ) {
											$strtagslug = $term->slug;
											$strtagname = $term->name;
											$strurl     = "<a href=/about-us/news/?news-tag=" . $strtagslug . "&news-view=child>" . $strtagname . "</a>";
											$i          = $i - 1;
											if ( $i < ( - 1 ) ) {
												printf( ', %s', $strurl );
											} else {
												printf( '%s', $strurl );
											}
										}
									}
									?>
							</div>
					<?php endwhile; ?>
						<!-- end news loop -->
						<div class="clear-both" style="height: 0px;"></div>
					</div>
					<div class="clear-both" style="height: 0px;"></div>
					<div align="center">
						<?php
						if ( $strnopaging != 1 ) {
							global $wp_query;
							$big = 999999999; // need an unlikely integer
							echo paginate_links( array(
								//'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format'  => 'page/%#%/',
								'current' => max( 1, get_query_var( 'paged' ) ),
								'total'   => $wp_query->max_num_pages
							) );
						}
						?>
					</div>
					<?php else : ?>
						<p><h2>Sorry</h2>No news stories found for this time period.</p>
					<?php endif;
					wp_reset_query(); ?>
					<!-- end pictorial-list -->
				</div>
				<!-- end breather -->
			</div>
			<!-- end col -->
	</div>
	<!-- end row -->

	<!-- newsletter -->
	<div class="clear-both"></div>
	<div class="row">
		<div class="col starts-at-full ends-at-half box clr">

			<a href="https://twitter.com/UkNatArchives" target="_blank"
			   title="External website - link opens in a new window">
				<div class="heading-holding-banner">
					<h2 class="section-heading"><span> <span>Our latest tweets</span> </span></h2>
				</div>
			</a>
			<!-- end heading-holding-banner -->


		</div>


		<!-- twitter -->
		<div class="col starts-at-full ends-at-half box clr">


			<a href="https://webarchive.nationalarchives.gov.uk/*/http://www.nationalarchives.gov.uk/news/releases-archive.htm">
				<div class="heading-holding-banner">
					<h2 class="section-heading"><span> <span>Previous document releases</span> </span></h2>
				</div>
			</a>

			<div class="breather clr separator no-left-right-padding">




                <p>Read more about <a href="https://webarchive.nationalarchives.gov.uk/*/http://www.nationalarchives.gov.uk/news/releases-archive.htm"> historic document releases from 2010-2016</a>.</p>




                <p>Read more about <a href="https://webarchive.nationalarchives.gov.uk/*/http://www.nationalarchives.gov.uk/about/news/">document releases since 2016</a>.</p>



			</div>
		</div>
	</div>
	</main>
	</div>
<?php include 'footer.php'; ?>
