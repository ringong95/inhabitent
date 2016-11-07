<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="hero-banner">
	
</div>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<section class="adventures">
	<h1> Latest Adventures</h1>
	<div class="adventures-wrapper">
		<div class="big">
			<a> Getting Back to Nature in a Canoe</a>
		</div>
		<div class="mediumwithsmalls">
			<div class="medium"></div>
			<div class="smalls">
				<div class="small1"></div>
				<div class="small2"></div>
			</div>
		</div>
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
