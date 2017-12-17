<?php

/*

@package almendarestheme

	========================
		ADMIN PAGE
	========================
*/

//Generate Almendares Admin Page
function almendares_add_admin_page()
{

    //Generate almendares Admin Page
    add_menu_page('Almendares Theme Options', 'Almendares', 'manage_options', 'prod_almendares', 'almendares_theme_create_page');

    //Generate almendares Admin Sub Pages
    add_submenu_page('prod_almendares', 'Almendares Theme Options', 'General', 'manage_options', 'prod_almendares', 'almendares_theme_create_page');
    add_submenu_page('prod_almendares', 'Almendares CSS Options', 'Theme support', 'manage_options', 'prod_almendares_theme', 'almendares_theme_settings_page');
    add_submenu_page('prod_almendares', 'almendares Contact Form', 'Contact Form', 'manage_options', 'prod_almendares_theme_contact', 'almendares_contact_form_page');


    //Activate custom settings
    add_action('admin_init', 'almendares_custom_settings');
}

add_action('admin_menu', 'almendares_add_admin_page');


/*==========================================
   RENDER SETTINGS
==========================================*/

//Create setting view
function almendares_custom_settings()
{

    //General
    register_setting('almendares-settings-group', 'first_name');
    register_setting('almendares-settings-group', 'last_name');
    register_setting('almendares-settings-group', 'twitter_handler', 'almendares_sanitize_twitter_handler');
    register_setting('almendares-settings-group', 'facebook_handler');
    register_setting('almendares-settings-group', 'gplus_handler');
    register_setting('almendares-settings-group', 'email_contact');

    add_settings_section('almendares-sidebar-options', 'Sidebar Option', 'almendares_sidebar_options', 'prod_almendares');

    add_settings_field('sidebar-name', 'First Name', 'almendares_sidebar_name', 'prod_almendares', 'almendares-sidebar-options');
    add_settings_field('sidebar-twitter', 'Twitter', 'almendares_sidebar_twitter', 'prod_almendares', 'almendares-sidebar-options');
    add_settings_field('sidebar-facebook', 'Facebook', 'almendares_sidebar_facebook', 'prod_almendares', 'almendares-sidebar-options');
    add_settings_field('sidebar-gplus', 'Google+', 'almendares_sidebar_gplus', 'prod_almendares', 'almendares-sidebar-options');
    add_settings_field('email-contact', 'Email contact', 'almendares_sidebar_email', 'prod_almendares', 'almendares-sidebar-options');


    //Theme Support
    register_setting('almendares-theme-support', 'post_formats');
    register_setting('almendares-theme-support', 'custom_header');
    register_setting('almendares-theme-support', 'custom_background');

    add_settings_section('almendares-theme-options', 'Theme Options', 'almendares_theme_options', 'prod_almendares_theme');

    add_settings_field('post-formats', 'Post Formats', 'almendares_post_formats', 'prod_almendares_theme', 'almendares-theme-options');
    add_settings_field('custom-header', 'Custom Header', 'almendares_custom_header', 'prod_almendares_theme', 'almendares-theme-options');
    add_settings_field('custom-background', 'Custom Background', 'almendares_custom_background', 'prod_almendares_theme', 'almendares-theme-options');


    //Contact Form Options
    register_setting('almendares-contact-options', 'activate_contact');

    add_settings_section('almendares-contact-section', 'Contact Form', 'almendares_contact_section', 'prod_almendares_theme_contact');

    add_settings_field('activate-form', 'Activate Contact Form', 'almendares_activate_contact', 'prod_almendares_theme_contact', 'almendares-contact-section');
}

//General
function almendares_sidebar_options()
{
    echo 'Customize your Sidebar Information';
}

function almendares_sidebar_name()
{
    $firstName = esc_attr(get_option('first_name'));
    $lastName = esc_attr(get_option('last_name'));
    echo '<input type="text" name="first_name" value="' . $firstName . '" placeholder="First Name" /> <input type="text" name="last_name" value="' . $lastName . '" placeholder="Last Name" />';
}

function almendares_sidebar_twitter()
{
    $twitter = esc_attr(get_option('twitter_handler'));
    echo '<input type="text" name="twitter_handler" value="' . $twitter . '" placeholder="Twitter" /><p class="description">Input your Twitter username without the @ character.</p>';
}

function almendares_sidebar_facebook()
{
    $facebook = esc_attr(get_option('facebook_handler'));
    echo '<input type="text" name="facebook_handler" value="' . $facebook . '" placeholder="Facebook" />';
}

function almendares_sidebar_gplus()
{
    $gplus = esc_attr(get_option('gplus_handler'));
    echo '<input type="text" name="gplus_handler" value="' . $gplus . '" placeholder="Google+" />';
}

function almendares_sidebar_email()
{
    $email = esc_attr(get_option('email_contact'));
    echo '<input type="text" name="email_contact" value="' . $email . '" placeholder="Email Contact" />';
}

//Theme Support
function almendares_theme_options()
{
    echo 'Activate and Deactivate specific Theme Support Options';
}

function almendares_post_formats()
{
    $options = get_option('post_formats');
    $formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
    $output = '';
    foreach ($formats as $format) {
        $checked = (@$options[$format] == 1 ? 'checked' : '');
        $output .= '<label><input type="checkbox" id="' . $format . '" name="post_formats[' . $format . ']" value="1" ' . $checked . ' /> ' . $format . '</label><br>';
    }
    echo $output;
}

function almendares_custom_header()
{
    $options = get_option('custom_header');
    $checked = (@$options == 1 ? 'checked' : '');
    echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" ' . $checked . ' /> Activate the Custom Header</label>';
}

function almendares_custom_background()
{
    $options = get_option('custom_background');
    $checked = (@$options == 1 ? 'checked' : '');
    echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" ' . $checked . ' /> Activate the Custom Background</label>';
}

//Contact
function almendares_contact_section()
{
    echo 'Activate and Deactivate the Built-in Contact Form';
}

function almendares_activate_contact()
{
    $options = get_option('activate_contact');
    $checked = (@$options == 1 ? 'checked' : '');
    echo '<label><input type="checkbox" id="custom_header" name="activate_contact" value="1" ' . $checked . ' /></label>';
}


//Sanitization settings
function almendares_sanitize_twitter_handler($input)
{
    $output = sanitize_text_field($input);
    $output = str_replace('@', '', $output);
    return $output;
}

/*==========================================
   SHORTCUTS
==========================================*/

function locationsPage ($atts) { include ( TEMPLATEPATH .'/inc/shortcodes/locaciones.php'); }
add_shortcode ('locations', 'locationsPage');

function shootCubaPage ($atts) { include ( TEMPLATEPATH .'/inc/shortcodes/shootcuba.php'); }
add_shortcode ('shootcuba', 'shootCubaPage');

function nosotrosPage ($atts) { include ( TEMPLATEPATH .'/inc/shortcodes/nosotros.php'); }
add_shortcode ('nosotros', 'nosotrosPage');

/*==========================================
   RENDER PAGES ALMENDARES
==========================================*/

// Page General
function almendares_theme_create_page()
{
    require_once(get_template_directory() . '/inc/templates/prod-almendares-admin.php');
}

// Page Theme Support
function almendares_theme_settings_page()
{

    require_once(get_template_directory() . '/inc/templates/prod-almendares-theme-support.php');
}

//    Contanct
function almendares_contact_form_page()
{
    require_once(get_template_directory() . '/inc/templates/almendares-contact-form.php');
}

