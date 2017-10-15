$(function () {

})

$(document).ready(function(){

    var headerHeight = 60;

    //Mob Menu functionaily
    var mobnav = $('.mob-header');
    var fullnav = $('.fullpage-mobnav');

    $('.hamburger').click(function(){
        if (mobnav.hasClass('visible')) {
            mobnav.removeClass('visible');
            setTimeout(function() {
                fullnav.removeClass('visible');
                $('.hamburger').removeClass('active');
            }, 400);
        } else {
            fullnav.addClass('visible');
            $('.hamburger').addClass('active');
            setTimeout(function() {
                mobnav.addClass('visible');
            }, 400);
        }

    });
    $('.mob-header a').click(function(){
        mobnav.removeClass('visible');
        fullnav.removeClass('visible');
        $('.hamburger').removeClass('active');

    });

    //header functionality and title functionality
    var header = $('.site-header');
    var subheader_height = document.getElementById('_site-header').offsetHeight;
    var title =  $('.site-title_');
    var titleBig =  $('._site-title');

    $(window).scroll(function(){
        if ($(this).scrollTop() > subheader_height - headerHeight) {
            header.css({
                'box-shadow': '0 6px 5px 1px rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 8px -1px rgba(0, 0, 0, 0.2)'
            });
        } else {
            header.css({
                'box-shadow': 'none'
            });
        }

        if ($(this).scrollTop() > headerHeight - 20) {
            titleBig.fadeOut();
        } else {
            titleBig.fadeIn();
        }
    });




    //Scroll to top functionality
    var scrolltotop = $('.scrolltop');

    $(window).scroll(function(){
        if ($(this).scrollTop() > 120) {
            scrolltotop.addClass('active');
        } else {
            scrolltotop.removeClass('active');
        }
    });
    scrolltotop.click(function(){
        $('body, html').animate ({
            scrollTop: 0
        }, 1000);
    });


    //Menu Functionality
    var a = $('a.inpage-link');
    var projects_a = $('a[data-scrollto="#section-projects"]');
    var aboutme_a = $('a[data-scrollto="#section-aboutme"]');
    var contact_a = $('a[data-scrollto="#section-contact"]');

    a.click(function(e) {
        e.preventDefault();
        var scrollto = $(this).data('scrollto');
         $('body, html').animate ({
            scrollTop: $(scrollto).offset().top - headerHeight
        }, 1000);
    });

    $(window).scroll(function() {

        if ($(this).scrollTop() >= $('#section-projects').offset().top - headerHeight*4 && $(this).scrollTop() < $('#section-contact').offset().top - headerHeight*4) {
            projects_a.addClass('active');
            projects_a.siblings().removeClass('active');
        } else if ($(this).scrollTop() >= $('#section-contact').offset().top - headerHeight*4) {
            contact_a.addClass('active');
            contact_a.siblings().removeClass('active');
        } else {
            aboutme_a.addClass('active');
            aboutme_a.siblings().removeClass('active');
        }
    });

    $('#work-with-me').click(function(e){
        e.preventDefault();
        $('body, html').animate ({
            scrollTop: $('#section-contact').offset().top - headerHeight
        }, 1000);
    });

});