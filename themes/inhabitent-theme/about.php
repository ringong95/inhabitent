<?php /* Template Name: about */ ?>
<!-- this name is to setup the custom page template -->
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section>

	<div class="about_hero_banner">
	<h1 class="about-hero-text"> About </h1>
		
	</div>
</section>
<section class="about_text">
	<div class="ourstory">
	<h2 >Our Story</h2>
		<p>
			<?php echo CFS()->get( 'about_our_story' ); ?>
		</p>
	</div>
	<div class="ourteam">
	<h2> Our Team </h2>
		<p>
			<?php echo CFS()->get( 'about_our_team' ); ?>
		</p>
	</div>
</section>


<?php get_footer(); ?>
