<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="hero-banner">
	
</div>
<div class="shopstufftitle">
  <h2> Shop Stuff</h2>
</div>
<div class="taxonomy_loop">

  <?php 
  $taxonomies  = get_terms( array(
   'taxonomy' => 'product_type',
   ) );
   ?> 

   <?php
   foreach ( $taxonomies  as $term ):?>

   <div class="category-links">
    <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg">
    <p> <?php echo $term->description ?> </p>

    <a href="product_type/<?php echo $term->slug;?> " class="category-link"> <?php echo $term->name ?> Stuff</a>
  </div>
<?php endforeach; ?>


</div>
<div class="shopstufftitle">
  <h2> Inhabitent Journal</h2>
</div>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
    <section class="frontpageposts">
      <?php
      $args = array( 'post_type' => 'post', 
       'order' => 'ASC', 
       'posts_per_page' => 3 );
  			 $journal_posts = get_posts( $args ); // returns an array of posts
  			 ?>

  			 <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
  			 	<div class="onefrontpagepost">


  			 		<?php 
  			 		the_post_thumbnail(); ?>
            <div class="journal_wrapper">
              <p><?php echo get_the_date(); ?> / <?php comments_number(); ?> </p>
              <a href=" <?php the_permalink(); ?> "> <h3> <?php the_title(); ?> </h3> </a>
              <a class="read-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"> Read Entry </a>
            </div>

          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </section>
      <section>




      </main><!-- #main -->
    </div><!-- #primary -->
  </section>
  <section class="adventures">

    <div class="shopstufftitle">
     <h2> Latest Adventures</h2>
   </div>

   <div class="adventures-wrapper">

    <div class="big">
      <div class="adventure-meta">
       <a class="adventures-text adventures-text-big"> Getting Back to Nature in a Canoe</a>
       <a class="read-more big-read-more">Read More</a>
     </div>
   </div>

   <div class="mediumwithsmalls">

     <div class="medium">
      <div class="adventure-meta">
       <a class="adventures-text adventures-text-medium">
         A Night with Friends at the Beach</a>
         <a class="read-more medium-read-more">Read More</a>
       </div>
     </div>

     <div class="smalls">

      <div class="small1">
        <div class="adventure-meta">
          <a class="adventures-text adventures-text-small"> Taking in the View at Big Mountain</a>
          <a class="read-more">Read More</a>
        </div>
      </div>

      <div class="small2">
        <div class="adventure-meta">
          <a class="adventures-text adventures-text-small"> Star-Gazing at the Night Sky </a>
          <a class="read-more">Read More</a>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="advntures-button-wrapper">
  <a class="advntures-button"> Button yo </a>
</div>
</section>

<?php get_footer(); ?>
