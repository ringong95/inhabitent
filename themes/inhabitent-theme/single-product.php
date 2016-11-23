<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area ">
	<main id="main" class="site-main" role="main">


		<?php while ( have_posts() ) : the_post(); ?>

			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="entry-header, journal-header">
					<div class="single-product-page">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="single-product-image">
								<?php the_post_thumbnail( ); ?>
							</div>
						<?php endif; ?>
						<div class="single-product-content">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

							

						</div><!-- .entry-header -->

						<div class="entry-content">

							<p class="product_price"><?php echo CFS()->get( 'product_price' ); ?>	</p>
							<?php the_content(); ?>
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
								) );
								?>


							</div><!-- .entry-content -->

							<footer class="entry-footer">
								<?php red_starter_entry_footer(); ?>
								<div class="social-media-wrapper">
									<a class="social-media"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
									<a class="social-media"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
									<a class="social-media"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
								</div>

							</footer><!-- .entry-footer -->
						</div>
					</div>
				</article>



				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->

	</div><!-- #primary -->



	<?php get_footer(); ?>
