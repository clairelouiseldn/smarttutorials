<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<p><?php the_content(); ?></p>

			<h2><?php the_title(); ?></h2>

			<p><?php the_content(); ?></p>

		<?php endwhile; ?>

	<?php endif; ?>
	

<?php get_footer(); ?>