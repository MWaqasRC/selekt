jQuery(document).ready(function ($) {
    $('#list-2, #list-3').hide();
    $('#air-plane').addClass('plane-1');
    $('#pin-container').addClass('pin-container-1');
    $('#pin-test').html('UK');
    var num = 1;
    $('#list-country .screen1').hover(
        (event) => {
            var id = event.currentTarget.id;
            var concat = id.substr(id.length - 1);
            if (num == concat) return;
            num = concat;
            $('#list-1, #list-2, #list-3 , .pin-container-1, .pin-container-2, .pin-container-3').hide();
            setTimeout(() => {
                $('.pin-container-1, .pin-container-2, .pin-container-3').show();
            }, 50)
            $('#air-plane').removeClass('plane-1 plane-2 plane-3');
            $('#pin-container').removeClass('pin-container-1 pin-container-2 pin-container-3');
            $('#pin-test').html(concat == 1 ? 'UK' : concat == 2 ? 'ITLAY' : concat == 3 ? 'PAKISTAN' : '')
            // setTimeout(() => {
            $('#air-plane').addClass('plane-' + concat);
            $('#pin-container').addClass('pin-container-' + concat);
            // }, 100);
            $('#list-' + concat).show();
        },
        () => {
            // var id = event.currentTarget.id;
            // var concat = id.substr(id.length - 1);
            // $('#air-plane').removeClass('plane-' + concat);
        });


    jQuery(window).scroll(function () {
        var sticky = jQuery('.bg-nav'),
            scroll = jQuery(window).scrollTop();

        if (scroll >= 50) {
            sticky.addClass('fixed-header');
        }
        else {
            sticky.removeClass('fixed-header');

        }
    });

    jQuery(".flexnav").flexNav();

    jQuery("#banner-slider").owlCarousel({
        loop: true,
        margin: 0,
        pagination: true,
        nav: true,
        dots: true,
        singleItem: true,
        autoplay: true,
        autoplayTimeout: 3000,
        thumbs: true,
        thumbsPrerendered: true,
        thumbImage: false,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1200: {
                items: 1,

            }
        }
    });

    jQuery("#sec-1-slider").owlCarousel({
        loop: true,
        margin: 20,
        pagination: false,
        nav: true,
        navText: ['<img src="images/left-arrow.png" alt="" class="img-fluid">', '<img src="images/next-arrow.png" alt="" class="img-fluid">'],
        dots: true,
        singleItem: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        thumbs: false,
        center: true,
        responsive: {
            0: {
                items: 1,
                center: false,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,

            }
        }
    });


    jQuery("#sec-2-slider").owlCarousel({
        loop: true,
        margin: 20,
        pagination: false,
        nav: true,
        navText: ['<img src="images/prev2-arrow.png" alt="" class="img-fluid">', '<img src="images/next2-arrow.png" alt="" class="img-fluid">'],
        dots: true,
        singleItem: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        thumbs: false,
        center: false,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
                center: true,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 2,

            }
        }
    });

    $('.map-img1').show();
    $('.map-img2').hide();
    $('.map-img3').hide();
    if ($('#video1').get(0).paused)
        $('#video1').get(0).play();


    $("#country1").hover(function () {
        $('.map-img').hide();
        $('.map-img2').hide();
        $('.map-img3').hide();

        $('.map-img1').show();

        if ($('#video1').get(0).paused)
            $('#video1').get(0).play();


    });
    $("#country2").hover(function () {
        $('.map-img').hide();
        $('.map-img1').hide();
        $('.map-img3').hide();

        $('.map-img2').show();

        if ($('#video2').get(0).paused)
            $('#video2').get(0).play();


    });

    $("#country3").hover(function () {
        $('.map-img').hide();
        $('.map-img1').hide();
        $('.map-img2').hide();

        $('.map-img3').show();

        if ($('#video3').get(0).paused)
            $('#video3').get(0).play();


    });
});

jQuery(document).ready(function () {
    jQuery("#flip").click(function () {
        jQuery("#panel").slideToggle("500");
    });
});

$('a[href*="#"]').on('click', function (e) {
    e.preventDefault()

    $('html, body').animate(
        {
            scrollTop: $($(this).attr('href')).offset().top,
        },
        500,
        'linear'
    )
});





