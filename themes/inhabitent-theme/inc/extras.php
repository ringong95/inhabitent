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
    h1 a { background: url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important;
    background-size: 310px !important;
    background-repeat: no-repeat !important;

    background-position: bottom !important; 
    height: 120px !important; width: 310px !important; margin-left: -40px;}                            
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
            background-image:linear-gradient( to bottom, rgba(0,0,0,0.5)0%, rgba(0,0,0,.01) 100%), url($url);
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

function  inhabitent__product_archive_title ($title){
    if(is_post_type_archive('product')){
        $title = 'Shop Stuff';
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'inhabitent__product_archive_title');


/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function red_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;
    
    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');
        
        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );
        
        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );
        
        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );
        
        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
        
        // create a custom "more" link
        $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
        
        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
        
        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt' );


