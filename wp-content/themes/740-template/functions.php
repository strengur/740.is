<?php
/***** Register our sidebars and widgetized areas *****/
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/***** STYLES AND FONTS DECLARED *****/
function theme_styles() {
	wp_enqueue_style('googleFonts-Josefin-Slab','http://fonts.googleapis.com/css?family=Josefin+Slab:400,700');

	wp_enqueue_style('googleFonts-Alegreya-Sans','http://fonts.googleapis.com/css?family=Alegreya+Sans:300,500,300italic,500italic');

	wp_enqueue_style('normalize-theme-style', get_template_directory_uri(). '/css/normalize.css');
	wp_enqueue_style('main-theme-style', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

//------ EXCERPT ADJUSTMENT ------//
function new_excerpt_more( $more ) {
	//return ' <a class="new-excerpt" href="' . get_permalink( get_the_ID() ) . '">' . __( '<br>[... Lesa Meira]' ) . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );
	
	function custom_excerpt_length( $length ) {
	return 45;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
?>