<?php
/**
 * Krassi only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function krassi_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'krassi' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'krassi' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<!-- ',
		'after_title'   => ' -->',
	) );
}
add_action( 'widgets_init', 'krassi_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function krassi_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style( 'krassi-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'krassi_scripts' );

?>
