<?php wp_footer() ?>
<section class="mbr-footer mbr-section mbr-section-md-padding" id="contacts3-p"
         style="background-color: rgb(46, 46, 46); padding-top: 50px; padding-bottom: 50px;">

    <div class="row">
        <div class="mbr-company col-xs-12 col-md-6 col-lg-4">

            <div class="mbr-company card">
                <div class="footer-title"><h6><?php _e('Nosotros', 'almendares')?></h6></div>
                <p class="list-group-text footer-somos" style="padding-right: 2em;"><?php _e('Nosotros - Valor', 'almendares')?>.<br>

            </div>

        </div>

        <div class="mbr-company col-xs-12 col-md-6 col-lg-4">
            <div class="footer-title"><h6><?php _e('Contacto', 'almendares')?></h6></div>
            <div class="mbr-company card">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span class="list-group-icon"><span
                                    class="etl-icon icon-phone mbr-iconfont-company-contacts3"></span></span>
                        <span class="list-group-text">+53 52720745</span>
                    </li>
                    <li class="list-group-item">
                        <span class="list-group-icon"><span
                                    class="etl-icon icon-map-pin mbr-iconfont-company-contacts3"></span></span>
                        <span class="list-group-text"><?php _e('Direccion', 'almendares')?></span>
                    </li>
                    <li class="list-group-item active">
                        <span class="list-group-icon"><span
                                    class="etl-icon icon-envelope mbr-iconfont-company-contacts3"></span></span>
                        <span class="list-group-text"><a
                                    href="mailto:produccionesalmendares@gmail.com">produccionesalmendares@gmail.com</a></span>
                    </li>
                </ul>
            </div>

        </div>
        <div class="mbr-footer-content col-xs-12 col-md-6 col-lg-4">
            <div class="footer-title"><h6><?php _e('Redes Sociales', 'almendares')?></h6></div>
            <div class="mbr-section-btn">
                <a class="facebook btn btn-lg btn-white btn-white-outline social-slider"
                   href="https://www.facebook.com/produccionesalmendares/" target="_blank">
                    <div class="social-i">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                <a class="twitter btn btn-lg btn-white btn-white-outline social-slider"
                   href="https://twitter.com/almendarespro" target="_blank">
                    <div class="social-i">
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>
                <a class="youtube btn btn-lg btn-white btn-white-outline social-slider"
                   href="https://www.youtube.com/user/almendarespro" target="_blank">
                    <div class="social-i">
                        <i class="fa fa-youtube-play"></i>
                        <i class="fa fa-youtube-play"></i>
                    </div>
                </a>
                <a class="linkedin btn btn-lg btn-white btn-white-outline social-slider"
                   href="https://www.linkedin.com/in/producciones-almendares-890783113/"
                   target="_blank">
                    <div class="social-i">
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-linkedin"></i>
                    </div>
                </a>
                <a class="google btn btn-lg btn-white btn-white-outline social-slider"
                   href="https://plus.google.com/+Produccionesalmendares" target="_blank">
                    <div class="social-i">
                        <i class="fa fa-google-plus"></i>
                        <i class="fa fa-google-plus"></i>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>


<script src="<?php echo get_template_directory_uri() ?>/assets/web/assets/jquery/jquery.min.js"></script>
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/assets/tether/tether.min.js"></script>-->
<script src="<?php echo get_template_directory_uri() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/smooth-scroll/smooth-scroll.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/dropdown/js/script.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/touch-swipe/jquery.touch-swipe.min.js"></script>
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/assets/viewport-checker/jquery.viewportchecker.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri() ?><!--/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>-->
<script src="<?php echo get_template_directory_uri() ?>/assets/jarallax/jarallax.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/theme/js/script.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/mobirise-gallery/player.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/mobirise-gallery/script.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/almendares.js"></script>

<script>
    $(window).load(function () { // makes sure the whole site is loaded
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.

        var magic = $('.magic1, .magic2'),
            i = 0,
            len = magic.length,
            left = $('.container').width(); //SET THIS TO WHATEVER PARENT CONTAINER YOU ARE SLIDING INSIDE

        var slide = function(){
            magic.each( function( i ){
                $( this ).delay( i*6000 ).fadeIn().animate({"bottom":"+="+90},2000, function(){
                    $( this ).delay(2000).fadeOut(3000).animate({ "bottom":"-="+90 }, 0, function(){
                        if( i === len - 1 ){ slide(); }
                    });
                });
            });
        }
        slide();
    })
</script>
<input name="animation" type="hidden">
<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a>
</div>

</body>
</html>
