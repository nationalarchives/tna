<?php
/*
Template Name: News Filter Page
*/
get_header();

/* variables go here */

$stryear       = ( isset( $_GET["news-year"] ) ) ? $_GET["news-year"] : null;
$strtype       = ( isset( $_GET["news-type"] ) ) ? $_GET["news-type"] : null;
$strtag        = ( isset( $_GET["news-tag"] ) ) ? $_GET["news-tag"] : null;
$strview       = ( isset( $_GET["news-view"] ) ) ? $_GET["news-view"] : null;
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
					<form action="<?php the_permalink(); ?>" method="get" name="resources-form" id="resources-form">
						<div class="select-float preload">
							<h2>Filter by</h2>
							<select class="starts-at-full ends-at-one-quarter margin-small" name="news-year">
								<option value="" selected="selected">All years</option>
								<option value="2014" <?php if ( $stryear == "2014" ) {
									echo "selected";
								} ?>>2014
								</option>
								<option value="2015" <?php if ( $stryear == "2015" ) {
									echo "selected";
								} ?>>2015
								</option>
								<?php if ( date( "Y" ) == "2016" ) { ?>
									<option value="2016" <?php if ( $stryear == "2016" ) {
										echo "selected";
									} ?>>2016
									</option>
								<?php } ?>
							</select>
							<select class="starts-at-full ends-at-one-quarter margin-small" name="news-type">
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
					<div class="breather">
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
								'format'  => '?paged=%#%',
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
			<div class="position-top-right">
				<a href="https://twitter.com/UkNatArchives" target="_blank"
				   title="External website - link opens in a new window">
					<div class="sprite icon-twitter float-left"></div>
				</a></div>

			<a href="https://twitter.com/UkNatArchives" target="_blank"
			   title="External website - link opens in a new window">
				<div class="heading-holding-banner">
					<h2><span> <span>Our latest tweets</span> </span></h2>
				</div>
			</a>
			<!-- end heading-holding-banner -->


			<div class="breather clr">

				<div align="center">

					<a class="twitter-timeline" href="https://twitter.com/UkNatArchives"
					   data-widget-id="544834181143220224">@UkNatArchives</a>
					<script>!function (d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
							if (!d.getElementById(id)) {
								js = d.createElement(s);
								js.id = id;
								js.src = p + "://platform.twitter.com/widgets.js";
								fjs.parentNode.insertBefore(js, fjs);
							}
						}(document, "script", "twitter-wjs");</script>

					<div class="clear10px"></div>
				</div>
			</div>
		</div>


		<!-- twitter -->
		<div class="col starts-at-full ends-at-half box clr">
			<a href="http://www.nationalarchives.gov.uk/news/enewsletter.htm">
				<div class="heading-holding-banner">
					<h2><span> <span>Sign up to our enewsletter</span> </span></h2>
				</div>
			</a>
			<!-- end heading-holding-banner -->


			<div class="breather clr separator">
				<p>If you'd like to receive regular news updates from The National Archives, enter your email address
					below.</p>
				<form name="signup" id="signup" action="http://r1.wiredemail.net/signup.ashx" method="post" role="form">
					<input type="hidden" name="addressbookid" value="636353"> <!-- homepage and general sign up -->
					<!-- input type="hidden" name="addressbookid" value="732466" -->
					<!-- first world war portal sign up --><input type="hidden" name="userid" value="173459"><input
						type="hidden" name="ReturnURL"
						value="http://nationalarchives.gov.uk/news/subscribe-confirmation.htm"><label for="Email">Sign
						up for our newsletter</label><input type="email" name="Email" id="Email"
					                                        required="required"><input id="newsletterSignUp"
					                                                                   type="submit" name="Submit"
					                                                                   value="Sign up now"
					                                                                   class="margin-left-medium">
				</form>
			</div>

			<a href="http://www.nationalarchives.gov.uk/news/releases-archive.htm">
				<div class="heading-holding-banner">
					<h2><span> <span>Previous document releases</span> </span></h2>
				</div>
			</a>

			<div class="breather clr separator">
				Read more about <a href="http://www.nationalarchives.gov.uk/news/releases-archive.htm">files we've
					released</a> in previous years.
			</div>
		</div>
	</div>
	</main>
	</div>
<?php include 'footer.php'; ?>