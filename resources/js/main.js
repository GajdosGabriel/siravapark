// Animate navigation clicks
$("a[href^='#'], .internal").on('click', function(e) {
    e.preventDefault();

    hash = this.hash;

    if ($(window).width() < 992) {
        $('.navbar-collapse').removeClass('show');
    }

    $('html, body').animate({
        scrollTop: $(hash).offset().top - 80
    }, 1000);
});

// Main carousel
$('#carouselMain').carousel({
    interval: 5000
});

// Hide flash messages
$('#flashContainer .alert').not('.alert-important').delay(10000).fadeOut(500);

// Cookie consent
$('.cookie-consent__agree').click(function() {
    location.reload();
});

// Animations on scroll
AOS.init();