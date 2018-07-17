<?php 

/* Template Name: Page No Title */

get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h1>Custome Title for Contact Page</h1>

			<p><?php the_content(); ?></p>

		<?php endwhile; ?>

	<?php endif; ?>
	

<?php get_footer(); ?>