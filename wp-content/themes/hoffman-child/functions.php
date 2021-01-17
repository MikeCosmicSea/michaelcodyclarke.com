<?php add_action( 'wp_enqueue_scripts', 'hoffman_child_enqueue_styles' );
function hoffman_child_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
		array( 'hoffman_style' ),
		wp_get_theme()->get('Version')
	);
}

?>
