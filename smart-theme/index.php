<?php
/*
 * The main template file.
 *
 * This will display a page when nothing more specific matches a query.
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content">

		    <main role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive', 'tutorial' ); ?>

				<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

		    </main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
