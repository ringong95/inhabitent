<?php
/**
 * The template for displaying blog posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="side_bar_enabler">
	<div id="primary" class="content-area, journal">

		<main id="main" class="site-main, journal_index" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

<<<<<<< HEAD
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

=======
		<?php endwhile; // End of the loop. ?>
<?php get_header();?>
>>>>>>> 4146e22fe0f596858aa157ec08599f539d921277
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
