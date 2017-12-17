<?php get_header() ?>

<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-after-navbar"
         data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="50000"
         id="slider-8">
    <div>
        <div>
            <div>
                <!--                <ol class="carousel-indicators">-->
                <!--                    <li data-app-prevent-settings="" data-target="#slider-8" data-slide-to="0" class="active"></li>-->
                <!--                    <li data-app-prevent-settings="" data-target="#slider-8" data-slide-to="1"></li>-->
                <!---->
                <!--                </ol>-->
                <div class="carousel-inner" role="listbox">
                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active"
                         data-bg-video-slide="false"
                         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/slider1.jpg);">
                        <div class="mbr-table-cell">

                            <div class="container-slide container">

                                <div class="row">
                                    <div id="display-1" class="col-md-8 col-md-offset-2 text-xs-center">
                                        <h1 class="mbr-section-title display-1 animated flipInY">
                                            PRODUCCIONES ALMENDARES</h1>
                                        <div class="mbr-section-btn">
                                            <a class="facebook btn btn-lg btn-white btn-white-outline social-slider animated fadeInUp"
                                               href="https://www.facebook.com/produccionesalmendares/" target="_blank">
                                                <div class="social-i">
                                                    <i class="fa fa-facebook"></i>
                                                    <i class="fa fa-facebook"></i>
                                                </div>
                                            </a>
                                            <a class="twitter btn btn-lg btn-white btn-white-outline social-slider animated fadeInUp"
                                               href="https://twitter.com/almendarespro" target="_blank">
                                                <div class="social-i">
                                                    <i class="fa fa-twitter"></i>
                                                    <i class="fa fa-twitter"></i>
                                                </div>
                                            </a>
                                            <a class="youtube btn btn-lg btn-white btn-white-outline social-slider animated fadeInUp"
                                               href="https://www.youtube.com/user/almendarespro" target="_blank">
                                                <div class="social-i">
                                                    <i class="fa fa-youtube-play"></i>
                                                    <i class="fa fa-youtube-play"></i>
                                                </div>
                                            </a>
                                            <a class="linkedin btn btn-lg btn-white btn-white-outline social-slider animated fadeInUp"
                                               href="https://www.linkedin.com/in/producciones-almendares-890783113/"
                                               target="_blank">
                                                <div class="social-i">
                                                    <i class="fa fa-linkedin"></i>
                                                    <i class="fa fa-linkedin"></i>
                                                </div>
                                            </a>
                                            <a class="google btn btn-lg btn-white btn-white-outline social-slider animated fadeInUp"
                                               href="https://plus.google.com/+Produccionesalmendares" target="_blank ">
                                                <div class="social-i">
                                                    <i class="fa fa-google-plus"></i>
                                                    <i class="fa fa-google-plus"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="magic1" >"El cine al alcance de tus manos"</span>
                            <span class="magic2" >"En Producciones Almendares nada se pierde"</span>
                        </div>
                    </div>
                </div>
<!--                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev"-->
<!--                   href="#slider-8">-->
<!--                    <span class="icon-prev" aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Previous</span>-->
<!--                </a>-->
<!--                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next"-->
<!--                   href="#slider-8">-->
<!--                    <span class="icon-next" aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Next</span>-->
<!--                </a>-->
            </div>
        </div>
    </div>
</section>
<div id="gradient-slider" class="gradient-bottom"></div>


<!--Noticias-->
<div class="container">
    <section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-b"
             style="background-color: rgb(255, 255, 255);">

        <div class="title-sections videos">
            <h2><?php _e('Videos Destacados', 'almendares') ?></h2>
        </div>

        <div class="owl-carousel owl-theme" style="margin-top: 2rem; margin-bottom: 4.5rem">

            <?php
            $videos_destacados = get_posts(array(
                'post_type' => 'videos_destacados',
                'posts_per_page' => 5,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ));
            ?>

            <?php foreach ($videos_destacados as $video): ?>
                <div class="item-video" style="height: 350px;" data-merge="2">
                    <a class="owl-video"
                       href="<?php echo get_field('link_de_youtube', $video->ID) ?>"></a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</div>

<section class="mbr-section mbr-parallax-background" id="msg-box7-e"
         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/somos.jpg); padding-top: 80px; padding-bottom: 80px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">
                <div class="mbr-table-cell col-md-5 text-xs-center text-md-right content-size">
                    <h3 class="mbr-section-title display-2 somos"><?php _e('Quienes somos', 'almendares') ?>?</h3>
                    <div class="">
                        <p style="color: white"><?php _e('Quienes somos - Respuesta', 'almendares') ?>.<br>
                        </p>
                    </div>
                    <a class="btn btn-sunset animated fadeInUp" href="
                    <?php echo site_url('/nosotros') ?>"><?php _e('Leer mas', 'almendares') ?></a>
                </div>
                <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size"
                     style="width: 53%;">
                    <div class="mbr-figure" data-animate="flipInY">

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/k0Nll0VodTI?rel=0"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div id="gradient-noticias" class="gradient-bottom"></div>

<div class="container">
    <div class="container" id="servicios">

        <section class="mbr-cards mbr-section mbr-section-nopadding" id="features6-a"
                 style="background-color: rgb(255, 255, 255);">

            <div class="container" style="margin-bottom: 4rem; margin-top: 4rem">
                <div class="hidden-sm-down">
                    <h5 class="title-servicios"><?php _e('La experiencia', 'almendares') ?>.</h5>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <div class="mbr-figure">
                            <img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/servicios.jpg"
                                 style="border: 3px solid #deddde;">
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 text-md-left">
                        <div class="lead">
                            <p class="primer-p"><?php _e('Con Producciones', 'almendares') ?>:<br>
                            <ul style="list-style:none">
                                <li><i class="fa fa-check"></i> <?php _e('Especialistas', 'almendares') ?></li>
                                <li><i class="fa fa-check"></i> <?php _e('Tecnología', 'almendares') ?></li>
                                <li><i class="fa fa-check"></i> <?php _e('Costos', 'almendares') ?></li>
                            </ul>
                            <p><?php _e('Ponemos', 'almendares') ?>.</p>

                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>
</div>

<!--Filmar en Cuba-->
<a class="filmar-en-cuba" href="<?php echo site_url('/filmar-en-cuba') ?>">
    <div><?php _e('Filmar en Cuba', 'almendares') ?>?</div>
</a>

<!--Locaciones-->
<div class="gradient-top"></div>
<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery4-f"
         data-filter="true" style="background-color: rgb(239, 239, 239); padding-top: 0rem; padding-bottom: 3rem;">

    <div class="title-sections locaciones">
        <h2><?php _e('Locaciones', 'almendares') ?></h2>
    </div>
    <br>
    <!--     Filter-->
    <!--                <div class="mbr-gallery-filter container gallery-filter-active">-->
    <!--                    <ul>-->
    <!--                        <li class="mbr-gallery-filter-all active">Todo</li>-->
    <!--                    </ul>-->
    <!--                </div>-->


    <!-- Gallery -->
    <div class="mbr-gallery-row">
        <div class="mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                         data-tags="Bodas" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="0" data-toggle="modal"
                             class="animated"
                             data-animate="zoomIn">
                            <img alt="" class="animated" data-animate="zoomIn"
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_2528-small.jpg">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                         data-tags="Bodas" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="1" data-toggle="modal"
                             class="animated"
                             data-animate="zoomIn">
                            <img alt="" class="animated" data-animate="zoomIn"
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_2879-small.jpg">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                         data-tags="Bodas" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="2" data-toggle="modal"
                             class="animated"
                             data-animate="zoomIn">
                            <img alt="" class="animated" data-animate="zoomIn"
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_2957-small.jpg">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                         data-tags="Bodas" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="3" data-toggle="modal"
                             class="animated"
                             data-animate="zoomIn">
                            <img alt="" class="animated" data-animate="zoomIn"
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3107-small.jpg">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                         data-tags="Bodas" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="4" data-toggle="modal"
                             class="animated"
                             data-animate="zoomIn">
                            <img alt="" class="animated" data-animate="zoomIn"
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3165-small.jpg">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                         data-tags="Bodas" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="5" data-toggle="modal"
                             class="animated"
                             data-animate="zoomIn">
                            <img alt="" class="animated" data-animate="zoomIn"
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3255-small.jpg">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                         data-tags="Bodas" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="6" data-toggle="modal"
                             class="animated"
                             data-animate="zoomIn">
                            <img alt="" class="animated" data-animate="zoomIn"
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3403-small.jpg">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                    <div class="mbr-gallery-item mbr-gallery-item__mobirise3 mbr-gallery-item--p1"
                         data-tags="Bodas" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="7" data-toggle="modal"
                             class="animated"
                             data-animate="zoomIn">
                            <img alt="" class="animated" data-animate="zoomIn"
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3422-small.jpg">
                            <span class="icon-focus"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1"
         data-keyboard="true" data-interval="false" id="lb-gallery4-f">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li class="puntos-locaciones" data-app-prevent-settings="" data-target="#lb-gallery4-f"
                            data-slide-to="0"></li>
                        <li class="puntos-locaciones" data-app-prevent-settings="" data-target="#lb-gallery4-f"
                            data-slide-to="1"></li>
                        <li class="puntos-locaciones" data-app-prevent-settings="" data-target="#lb-gallery4-f"
                            data-slide-to="2"></li>
                        <li class="puntos-locaciones" data-app-prevent-settings="" data-target="#lb-gallery4-f"
                            data-slide-to="3"></li>
                        <li class="puntos-locaciones" data-app-prevent-settings="" data-target="#lb-gallery4-f"
                            data-slide-to="4"></li>
                        <li class="puntos-locaciones" data-app-prevent-settings="" data-target="#lb-gallery4-f"
                            data-slide-to="5"></li>
                        <li class="puntos-locaciones" data-app-prevent-settings="" data-target="#lb-gallery4-f"
                            data-slide-to="6"></li>
                        <li class="puntos-locaciones" data-app-prevent-settings="" data-target="#lb-gallery4-f"
                            data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img alt=""
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_2528.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt=""
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_2879.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt=""
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_2957.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt=""
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3107.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt=""
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3165.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt=""
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3255.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt=""
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3403.jpg">
                        </div>
                        <div class="carousel-item">
                            <img alt=""
                                 src="<?php echo get_template_directory_uri() ?>/img/locaciones/IMG_3422.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery4-f">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery4-f">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">x</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 0.5rem;" class="btn-div botonespecial2">
        <a class="btn button load special2 active" href="<?php echo site_url('/locaciones'); ?>">
            <?php _e('Ver mas', 'almendares') ?>
        </a>
    </div>

</section>
<div class="gradient-bottom"></div>
<div class="container">

    <!--Equipo-->
    <section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-k"
             style="background-color: rgb(255, 255, 255);">


        <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block" data-animate="zoomIn">
                        <div class="card-img iconbox" data-animate="rotateIn">

                            <a href="mailto:produccionesalmendares@gmail.com"><img alt=""
                                                                                   src="<?php echo get_template_directory_uri() ?>/img/patricia.png"
                                                                                   class="img-circle" style="
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);">
                            </a>
                        </div>
                        <div class="card-block" data-animate="zoomIn">
                            <h4 class="card-title">Patricia Santa Coloma</h4>
                            <p id="directora" class="card-text"
                               data-animate="zoomIn"><?php _e('Directora', 'almendares') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Contacto-->
<section class="mbr-section mbr-parallax-background" id="contacto"
         style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/coworkers9.jpg); padding-top: 80px; padding-bottom: 70px; height: 500px;">
    <div class="mbr-overlay" style="background-color: rgb(0, 0, 0);">
    </div>
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2"><?php _e('Envienos su Mensaje', 'almendares') ?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                    <form id="almendaresContactForm" action="#" method="post"
                          data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control"
                                       placeholder="<?php _e('Nombre', 'almendares') ?>" id="contact-name"
                                       name="contact-name">
                                <small class="text-danger form-control-msg"><?php _e('Nombre - Validar', 'almendares') ?>
                                    .
                                </small>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="email" class="form-control"
                                       placeholder="<?php _e('Correo', 'almendares') ?>" id="contact-email"
                                       name="contact-email">
                                <small class="text-danger form-control-msg"><?php _e('Correo - Validar', 'almendares') ?>
                                    .
                                </small>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <textarea name="contact-message" id="contact-message" class="form-control"
                                          placeholder="<?php _e('Mensaje', 'almendares') ?>" rows="4"></textarea>
                                <small class="text-danger form-control-msg"><?php _e('Mensaje - Validar', 'almendares') ?>
                                    .
                                </small>
                            </div>
                        </div>

                        <div style="margin-left: 16px;">
                            <div class="btn-div botonespecial2">
                                <button type="submit"
                                        class="btn button load special2 active pull-right"><?php _e('Enviar', 'almendares') ?></button>
                            </div>
                        </div>
                        <small class="text-info form-control-msg js-form-submission"><?php _e('Enviando Mensaje', 'almendares') ?>
                            ...
                        </small>
                        <small class="text-success form-control-msg js-form-success"><?php _e('Mensaje Enviando', 'almendares') ?>
                            !
                        </small>
                        <small class="text-danger form-control-msg js-form-error"><?php _e('Ocurrio un poblema', 'almendares') ?>
                            !
                        </small>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="gradient-footer" class="gradient-bottom"></div>


<?php get_footer() ?>



