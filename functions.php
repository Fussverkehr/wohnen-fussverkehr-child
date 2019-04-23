<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/theme-files/fileadmin/templates/styles/styles.css' );
wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}

/**
 * Override Jetpack's default OpenGraph image.
 * Standard is blank WordPress image (https://s0.wp.com/i/blank.jpg).
 * Christoph Nahr 2015-07-07
 */
add_filter( 'jetpack_open_graph_image_default', function() {
    return 'https://mobilitaet-gesundheit.ch/wp-content/uploads/2016/11/cropped-icon_AMG-270x270.png';
});


?>