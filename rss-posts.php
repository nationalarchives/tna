<?php
/*
Template Name: Page showing RSS feed
*/
get_header(); ?>

<div id="page_wrap" class="container" role="main">
  <!-- Breadcrumbs -->
  <?php include 'breadcrumb.php'; ?>
  <?php

	if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

  <!-- content goes here -->

  <div class="row">
    <div class="col starts-at-full ends-at-two-thirds box clr">
      <div class="heading-holding-banner">
        <h1><span><span>
          <?php the_title(); ?>
          </span></span></h1>
          <div class="clear-both"></div>
      </div>
      <div class="breather no-left-right-padding content-area">
        <?php the_content(); ?>
        <div class="clear-both"></div>
        <h2 class="float-left">Latest updates</h2><a href="/category/re-users-and-licensees/feed/" class="button call-to-action float-right margin-top-large">Subscribe to the feed</a>
        <div class="clear-both"></div>
        <div id="guidance-links breather">
<?php
$args = array (
	'category_name'          => 're-users-and-licensees',
		'order'                  => 'DESC',
		'posts_per_page'         => '20',
	'orderby'                => 'date'
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>
 <div class="guidance-item">

 <h3><?php the_title(); ?><?php edit_post_link('Edit', '[', ']'); ?></h3>
<?php the_time('d-F-Y');?>
  <div class="guidance-description"><?php the_content(); ?>
 </div>
 </div>
 <?php

endwhile;
wp_reset_query();
?>
      <div class="clear-both"></div>


      </div>
    </div></div>

    <!-- content goes here -->
    <?php

// This gets the parent page ID
		$parentid = $post->post_parent;

// This gets the link to the parent page, based on the parent page ID
		$parentpermalink = get_permalink($parentid); ?>
    <div class="col starts-at-full ends-at-one-third clr box">
      <div class="heading-holding-banner">
        <h2 class="section-heading"> <span> <span> <a name="inThisSection" href="<?php echo $parentpermalink; ?>">Also in <?php echo get_the_title($parentid);?></a></span> </span> </h2>
      </div>
      <div class="breather no-left-right-padding">
        <ul class="sibling">
          <?php

		// This uses wp_list_pages to get the list of siblings of the current page. However we're actually showing the children of the parent page. We're also excluding the current page ID ($post->ID) so as not to duplicate it in the navigation and sorting the links by their menu order, as set manually on the WP edit page

		// We're using depth=1 to ensure we only get the children of the parent page, not grandchildren

		//See http://codex.wordpress.org/Function_Reference/wp_list_pages for a full list of parameters

		wp_list_pages("title_li=&child_of=$parentid&sort_column=menu_order&depth=1&exclude=$post->ID");

		?>
        </ul>
      </div>
    </div>

  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
