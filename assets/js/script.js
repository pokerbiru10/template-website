/**
 * Tamzis Landing Page Custom Script
 * Astra UI Style Interactions
 */

$(document).ready(function() {
    // Smooth scroll for anchor links (exclude carousel controls)
    $('a[href^="#"]:not([data-slide])').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 500);
        }
    });

    // Initialize Bootstrap Carousel with smooth transition
    $('.carousel').carousel({
        interval: 5000, // 5 seconds
        pause: "hover"
    });

    // Add shadow to header on scroll (Astra style sticky header effect)
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.astra-header').css({
                'box-shadow': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)'
            });
        } else {
            $('.astra-header').css({
                'box-shadow': '0 2px 4px rgba(0,0,0,0.05)'
            });
        }
    });
});
