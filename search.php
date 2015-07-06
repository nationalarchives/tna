<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package tna-dev
 */

get_header(); ?>

<div id="page_wrap" class="container" role="main">
<!-- Breadcrumbs -->
<?php include 'breadcrumb.php'; ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'tna-dev' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php tna_dev_paging_nav(); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'tna-dev' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'tna-dev' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->


		<?php endif; ?>

</div>


<?php get_footer(); ?>
