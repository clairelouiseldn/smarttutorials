<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<p><?php the_content(); ?></p>

		<?php get_template_part('template-parts/content' 'content'); ?>

		<?php endwhile; ?>

	<?php endif; ?>
	

<?php get_footer(); ?>