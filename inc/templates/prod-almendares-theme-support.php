<h1>Sunset Theme Support</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="sunset-general-form">
    <?php settings_fields( 'almendares-theme-support' ); ?>
    <?php do_settings_sections( 'prod_almendares_theme' ); ?>
    <?php submit_button(); ?>
</form>