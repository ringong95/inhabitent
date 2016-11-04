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
		
<i class="fa fa-meetup" aria-hidden="true"></i><i class="fa fa-meetup" aria-hidden="true"></i><i class="fa fa-meetup" aria-hidden="true"></i><i class="fa fa-meetup" aria-hidden="true"></i><i class="fa fa-meetup" aria-hidden="true"></i><i class="fa fa-meetup" aria-hidden="true"></i><i class="fa fa-meetup" aria-hidden="true"></i><i class="fa fa-meetup" aria-hidden="true"></i>
				<nav id="site-navigation" class="main-navigation" role="navigation">
				<a class="logo"href="home.php">
					<img src=" <?php echo get_template_directory_uri() ?>/images/inhabitent-logo-tent.svg" alt="logo">
					</a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
