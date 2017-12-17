<?php

require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/message-post-type.php';
require get_template_directory() . '/inc/widgets.php';

// walker class
require get_template_directory() . '/inc/walker.php';
/*llamadas ajax*/
require get_template_directory() . '/inc/ajax.php';


//para quitar los numeros que salen en el excerpt del widget
function rpwe_excerpt_filter( $excerpt ) {

    $pattern = '/^(\d+)/';
    $replacement = ' ';
    $excerpt =  preg_replace($pattern, $replacement, $excerpt);
    return $excerpt;
}
add_filter( 'rpwe_excerpt', 'rpwe_excerpt_filter' );

//para quitar la version del plugin de q-translate
remove_action('wp_head','qtranxf_wp_head_meta_generator');


