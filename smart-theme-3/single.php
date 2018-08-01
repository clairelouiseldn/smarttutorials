<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part('content', get_post_format()); ?>

			<h1><?php the_title(); ?></h1>
			
			<p><?php the_content(); ?></p>

			<?php get_template_part('template-parts/content'); ?>

		<?php endwhile; ?>

	<?php endif; ?>
	
<div class="sidebar">
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>