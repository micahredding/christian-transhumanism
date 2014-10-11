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
        'name' => __( 'Home Content Top', 'genesis' ),
        'id' => 'content-0',
        'description' => __( 'Home Content Top', 'genesis' ),
        'before_widget' => '<div class="homecontent fixedtopleft">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ) );
      genesis_register_sidebar( array(          
        'name' => __( 'Home Content Bottom', 'genesis' ),
        'id' => 'content-1',
        'description' => __( 'Home Content Bottom', 'genesis' ),
        'before_widget' => '<div class="homecontent fixedtopleft">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ) );
    genesis_register_sidebar( array(          
        'name' => __( 'Extra Content', 'genesis' ),
        'id' => 'content-2',
        'description' => __( 'Extra Content', 'genesis' ),
        'before_widget' => '<div class="homecontent fixedtopleft">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'ng_genesis_home_widgets' );

function ng_top_widgets() {
	if(is_front_page())
	genesis_widget_area ('content-0', array(
		'before' => '<div class="sidebar"><div class="" style="margin-bottom:2em;">',
		'after' => '</div></div>',));
}
function ng_home_page_widgets() {
	if(is_front_page())
	genesis_widget_area ('content-1', array(
		'before' => '<div class="sidebar"><div class="widget widget_rss">',
		'after' => '</div></div>',));

	if(is_page(125))
	genesis_widget_area ('content-2', array(
		'before' => '<div class="sidebar"><div class="widget widget_rss">',
		'after' => '</div></div>',));
}
add_action( 'genesis_before_loop', 'ng_top_widgets' );
add_action( 'genesis_after_loop', 'ng_home_page_widgets' );

//* This cheat will help you to customize genesis footer credit area.
//* For this cheat to work it is necessary that your child theme is HTML5 enabled.
add_filter('genesis_footer_creds_text', 'wpvkp_footer_creds_filter');
function wpvkp_footer_creds_filter( $editthecredit ) {
$editthecredit = 'Copyright &copy; &middot; <a href="http://christiantranshumanism.org">Christian Transhumanism</a>';
return $editthecredit ;
}
//*Please refer to the original post at my blog for full explaination of this snippet and other cheats