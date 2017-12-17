<?php

/*
	
@package almendarestheme
	
	========================
		AJAX FUNCTIONS
	========================
*/


add_action( 'wp_ajax_nopriv_almendares_save_user_contact_form', 'almendares_save_contact' );
add_action( 'wp_ajax_almendares_save_user_contact_form', 'almendares_save_contact' );

function almendares_save_contact(){

    $title = wp_strip_all_tags($_POST["name"]);
    $email = wp_strip_all_tags($_POST["email"]);
    $message = wp_strip_all_tags($_POST["message"]);

    if (!is_email($email))
    {
        return;
    }
    $args = array(
        'post_title' => $title,
        'post_content' => $message,
        'post_author' => 1,
        'post_status' => 'publish',
        'post_type' => 'almendares-contact',
        'meta_input' => array(
            '_contact_email_value_key' => $email
        )
    );
    
    $postID = wp_insert_post( $args );

    if ($postID != 0) {
        $to = get_option('admin_email');
        $subject = 'Formulario de Contacto Producciones Almendares - '.$title;
        $headers[] = 'From: '.get_bloginfo('name').' <webmaster@producciones-almendares.com>';
        $headers[] = 'Reply-To: '.$title.' <'.$email.'>';
        /*$headers[] = 'Content-Type: text/html: charset=UTF-8';*/
        wp_mail( $to, $subject, $message, $headers);
    }
    die();

}





















