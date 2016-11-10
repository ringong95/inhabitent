<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/*
// this will add a custom css for the login screen
*/
function childtheme_custom_login() {
    echo '<style type="text/css">                                                                   
    h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important; 
    height: 120px !important; width: 410px !important; margin-left: -40px;}                            
</style>';

}

add_action('login_head', 'childtheme_custom_login');


function my_styles_method() {

	if(!is_page_template('about.php')){
		return;
    }

		$url = CFS()->get ( 'about_background_image'); // This is grabbing the background
        $custom_css = "
        .about_hero_banner{ 
            background-image: url($url);
        }";
        wp_add_inline_style( 'red-starter-style', $custom_css );
    }

    add_action( 'wp_enqueue_scripts', 'my_styles_method' );

    function new_excerpt_more($more) {
     global $post;
     return '<div class="readmore"><a class="moretag" href="'. get_permalink($post->ID) . '"> Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>';
 }
 add_filter('excerpt_more', 'new_excerpt_more');

/**
*this sets the store to set 16 posts
*/
// use is tax for the taxonomy arhcives page

function get_all_product_posts( $query ){
    if( is_post_type_archive( 'product' ) && !is_admin() && $query->is_main_query() ) {
        $query->set('posts_per_page', '16');
        $query->set('orderby,', 'title');
        $query->set('order,', 'ASC');
    }
}
add_action( 'pre_get_posts', 'get_all_product_posts');

add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_category('product_type') ) {

        $title = single_cat_title( '', false );

    }

    return $title;

});