<?php

/*
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/

function almendares_load_admin_scripts( $hook ){
	if( 'toplevel_page_prod_almendares' != $hook ){ return; }
	
	wp_register_style( 'almendares_admin', get_template_directory_uri() . '/css/almendares.admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'almendares_admin' );
}
add_action( 'admin_enqueue_scripts', 'almendares_load_admin_scripts' );

/*
	========================
		FRONT-END ENQUEUE FUNCTIONS
	========================
*/

function almendares_load_scripts(){
    wp_enqueue_script( 'comment-reply','', array(), false, true  );
}
add_action( 'wp_enqueue_scripts', 'almendares_load_scripts' );
