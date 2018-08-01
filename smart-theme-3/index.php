<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part('content', get_post_format()); ?>

			<h1><?php the_title(); ?></h1>
			<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail') ?></div>
			<p><?php the_content(); ?></p>

		<?php endwhile; ?>

	<?php endif; ?>
	
<div class="sidebar">
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
