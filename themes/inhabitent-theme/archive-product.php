<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>		

		<div class="taxonomy_loop">

			<?php 
			$taxonomies  = get_terms( array(
				'taxonomy' => 'product_type',
				'hide_empty' => true,
				) );

				foreach ( $taxonomies  as $term ):?>

				<div>


					<a  href="product_type/<?php echo $term->slug;?>"> <?php echo $term->name ?> </a>
				</div>
			<?php endforeach; ?>


		</div>
		<?php
		
		
		?>
		<section class="products">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->
				<section class="products-home">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="individual-product">

							<?php if ( has_post_thumbnail() ) : ?>
								<div>
									<?php the_post_thumbnail( 'large' ); ?>
								</div>
							<?php endif; ?>

							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

							<?php echo CFS()->get( 'price' ); ?>	
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
