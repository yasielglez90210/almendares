<h1>Almendares Contact Form</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="almendares-general-form">
    <?php settings_fields( 'almendares-contact-options' ); ?>
    <?php do_settings_sections( 'prod_almendares_theme_contact' ); ?>
    <?php submit_button(); ?>
</form>