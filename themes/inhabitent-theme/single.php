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
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
			<?php if ( comments_open() || get_comments_number() ):
			comments_template();
			endif;
			?>
			<?php get_header();?>

		</main><!-- #main -->
		
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
