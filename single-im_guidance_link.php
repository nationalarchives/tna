
	<?php 
/*
Template Name: IM guidance links
*/

if ( have_posts() ) : ?>

		
<?php while ( have_posts() ) : the_post(); ?>
    
    <!-- content goes here -->
    
<a href="<?php the_field('guidance-link'); ?>"><?php the_title(); ?></a>


<?php endwhile; ?>


		<?php endif; ?>
    


