//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($("#menu-principal").offset().top > 200) {
        $(".navbar-fixed-top").addClass("navbar-my");
    } else {
         $(".navbar-fixed-top").removeClass("navbar-my");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});