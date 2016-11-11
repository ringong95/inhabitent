<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<div class="mini-nav">
		<?php
		the_archive_title( '<h1 class="page-title shop-stuff">', '</h1>' );
	
		?>		

		<div class="product_taxonomy_loop">

			<?php 
			$taxonomies  = get_terms( array(
				'taxonomy' => 'product_type',
				'hide_empty' => true,
				) );

				foreach ( $taxonomies  as $term ):?>

				<div class="minibutton">


					<a  href="product_type/<?php echo $term->slug;?>"> <?php echo $term->name ?> </a>
				</div>
			<?php endforeach; ?>
			</div>


		</div>
		<?php
		
		
		?>
		<section class="products">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">

				</header><!-- .page-header -->
				<section class="products-home">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="individual-product">
							<a href="<?php the_permalink(); ?>" rel="bookmark"> 
								<?php if ( has_post_thumbnail() ) : ?>
									<div>
										<?php the_post_thumbnail(); ?>
									</div>
								</a>
							<?php endif; ?>
							<div class="product-text">
								<?php the_title( sprintf( '<h2 class="entry-title"><span>', esc_url( get_permalink() ) ), '</span></h2>' ); ?>

								<p><?php echo CFS()->get( 'product_price' ); ?>	</p>
							</div>
						</div>
					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</section>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
