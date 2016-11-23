<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	
	
	<nav id="site-navigation" class="main-navigation">
	<div class="container">
		<div class="logo">
			<a href="inhabitent/home">
				<img src=" <?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-tent.svg" alt="logo">
			</a>
		</div>
		<div class="right-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', ) ); ?>
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
	
		
		<?php get_search_form( )?>
		</div>
		</div>
	</nav><!-- #site-navigation -->


<div id="content" class="site-content">
