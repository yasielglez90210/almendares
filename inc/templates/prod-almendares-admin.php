<h1>Almendares Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields( 'almendares-settings-group' ); ?>
    <?php do_settings_sections( 'prod_almendares' ); ?>
    <?php submit_button(); ?>
</form>