$(function () {
	'use strict';

	
     /*
    === Toggle Icon Mobile
    */
    
   jQuery('.navbar-toggle').on('click', function () {//toggel icon in phone screen nav bar
       jQuery(this).children('i').toggleClass('fa-times fa-bars');
    });
    new WOW().init();

    $('.owl-carousel').owlCarousel({
    items:3,
    loop:true,
    margin:10,
    merge:true,
        responsive:{
            678:{
                mergeFit:true
            },
            1000:{
                mergeFit:false
            }
        }
    });

    $('.show-content').on('click', function (e) {
        e.preventDefault();
        $('#'+$(this).data('show')+' .founder-content').removeClass('hidden');
        $(this).next('.hidden-content').removeClass('hidden');
        $(this).addClass('hidden');
    });
    $('.hidden-content').on('click', function (e) {
        e.preventDefault();
        $('#'+$(this).data('show')+' .founder-content').addClass('hidden');
        $(this).addClass('hidden');
        $(this).prev('.show-content').removeClass('hidden');
    });

});