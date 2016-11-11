<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="side_bar_enabler">
<div id="primary" class="content-area , single-journal">
	<main id="main" class="site-main" role="main">
	<!-- 	<?php echo CFS()->get( 'product_price' ); ?> -->

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; // End of the loop. ?>
		<?php get_header();?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
