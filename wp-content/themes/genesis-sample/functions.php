<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.1.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

function ng_genesis_home_widgets() {
      genesis_register_sidebar( array(          
        'name' => __( 'Home Content', 'genesis' ),
        'id' => 'content-1',
        'description' => __( 'Home Content', 'genesis' ),
        'before_widget' => '<div class="homecontent fixedtopleft">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'ng_genesis_home_widgets' );

function ng_home_page_widgets() {
	if ( is_front_page('') )
	genesis_widget_area ('content-1', array(
		'before' => '<div class="sidebar"><div class="widget widget_rss">',
		'after' => '</div></div>',));
}
add_action( 'genesis_after_loop', 'ng_home_page_widgets' );