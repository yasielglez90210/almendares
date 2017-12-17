<?php

get_header('blog'); ?>

    <div class="row">
        <div class="content-page-404">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <h1 class="title">404</h1>
                        <div class="subtitle"><?php _e('Lo sentimos', 'almendares')?>!<br><?php _e('Pagina no encontrada', 'almendares')?></div>
                        <p width="200px" class="text"><?php _e('El link esta roto', 'almendares')?></p>

                        <div style="text-align: center;" class="btn-div botonespecial2">
                            <a type="submit" class="btn button load special2 active" href="<?php echo get_site_url(); ?>">
                                <?php _e('Inicio', 'almendares') ?>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>