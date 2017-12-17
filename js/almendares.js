jQuery(function ($) {

    //================================
    // LOCACIONES - INDEX
    //================================

    $($('li.puntos-locaciones')[$('li.puntos-locaciones').length - 1]).addClass('active');
    $($('div.carousel-item')[$('div.carousel-item').length - 1]).addClass('active');

    //================================
    // VIDEOS
    //================================

    $('.owl-carousel').owlCarousel({
        items: 1,
        merge: true,
        loop: true,
        margin: 10,
        video: true,
        lazyLoad: true,
        center: true,
        responsive: {
            480: {
                items: 2
            },
            600: {
                items: 4
            }
        }
    });

    //================================
    // SCROLL
    //================================

    //Sombra del fixed-header
    var $win = $(window);
    var $navbar = $('.navbar-dropdown');
    var $body = $('body');

    if ((window.scrollY >= 0) && ($navbar.hasClass('blog-header'))) {
        $('.navbar-logo img').attr('src', 'http://producciones-almendares.com/wp-content/themes/almendares/assets/images/logoPA-black.png')
    }
    if ($navbar.hasClass('opened')) {
        if (window.scrollY > 70) {
            $navbar.css({'box-shadow': 'none'});
        }
        else {
            $navbar.css({'box-shadow': '0px 0px 10px 0px'});
        }
    }

    $win.scroll(function () {

        if (($(this).scrollTop() > 70) && (!$body.hasClass('navbar-dropdown-open'))) {
            $navbar.css({'box-shadow': '0 0 10px 0'});
            $('.navbar-logo img').attr('src', 'http://producciones-almendares.com/wp-content/themes/almendares/assets/images/logoPA-black.png')
        } else {
            if (!$navbar.hasClass('blog-header')) {
                $navbar.css({'box-shadow': 'none'});
                $('.navbar-logo img').attr('src', 'http://producciones-almendares.com/wp-content/themes/almendares/assets/images/logoPA.png')

            }

        }
    });

    //Social icons
    $('.social-slider > div').hover(function () {
            if ($win.width() <= '768') {
                $(this.children[0]).css({'margin-top': -14});
                $(this.children[1]).css({'margin-top': -14});
            }
            else {
                $(this.children[0]).css({'margin-top': -15});
                $(this.children[1]).css({'margin-top': -15});
            }
        },
        function () {
            $(this.children[0]).css({'margin-top': 15});
            $(this.children[1]).css({'margin-top': 15});
        });


    //================================
    // GENERALES
    //================================


    //================================
    // MENU
    //================================

    $('[data-toggle="dropdown-submenu"]').click(function (event) {
        event.stopPropagation();
        event.preventDefault();
    });

    $('.sub-open').hover(function () {
        $(this.children[1]).fadeIn(200);
    }, function () {
        $(this.children[1]).fadeOut(200);
    });


    $('#button-menu').click(function () {
        $navbar.css({'box-shadow': 'none'});
    });

    var close_menu = $('#close-menu');
    close_menu.click(function () {
        if (window.scrollY > 70) {
            $navbar.css({'box-shadow': '0px 0px 10px 0px'});
        }
    });

    if (($(this).scrollTop() > 110) && (!$body.hasClass('navbar-dropdown-open'))) {
        $navbar.css({'box-shadow': '0 0 10px 0'});
    } else {
        if (!$navbar.hasClass('blog-header'))
            $navbar.css({'box-shadow': 'none'});
    }


    /* contact form submission */
    $('#almendaresContactForm').on('submit', function (e) {

        e.preventDefault();
        $('.has-error').removeClass('has-error');
        var form = $(this),
            name = form.find('#contact-name').val(),
            email = form.find('#contact-email').val(),
            message = form.find('#contact-message').val(),
            ajaxurl = form.data('url');

        if (name === '') {
            $('#contact-name').parent('.form-group').addClass('has-error');
            return;
        }
        if (email === '') {
            $('#contact-email').parent('.form-group').addClass('has-error');
            return;
        }
        if (message === '') {
            $('#contact-message').parent('.form-group').addClass('has-error');
            return;
        }
        form.find('input, button, textarea').attr('disabled', 'disabled');
        $('.js-form-submission').addClass('js-show-feedback');

        $.ajax({

            url: ajaxurl,
            type: 'post',
            data: {
                name: name,
                email: email,
                message: message,
                action: 'almendares_save_user_contact_form'
            },
            error: function (response) {
                console.log(response);
                $('.js-form-submission').removeClass('js-show-feedback');
                $('.js-form-error').addClass('js-show-feedback');
                form.find('input, button, textarea').removeAttr('disabled');
            },
            success: function (response) {

                setTimeout(function () {
                    $('.js-form-submission').removeClass('js-show-feedback');
                    $('.js-form-success').addClass('js-show-feedback');
                    form.find('input, button, textarea').removeAttr('disabled').val('');

                }, 1500);

                setTimeout(function () {
                    $('.js-form-success').fadeOut();

                }, 2500);
            }

        });

    });

    //================================
    // SERVICIOS
    //================================

    // if ($('eventos-svg').length = 1) {
    //
    //     var $duration = 150;
    //     var megaphone = new Vivus('eventos-svg', {
    //         file: './wp-content/themes/almendares/img/svg/megaphone.svg',
    //         type: 'oneByOne',
    //         duration: $duration,
    //         animTimingFunction: Vivus.EASE_IN
    //     });
    // }

});



