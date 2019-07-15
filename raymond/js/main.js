(function ($) {
 "use strict";

/*----------------------------
 jQuery MeanMenu
------------------------------ */
	jQuery('nav#dropdown').meanmenu();	
	
/*----------------------------
 wow js active
------------------------------ */
 new WOW().init();

 /*---------------------
 mixItUp
--------------------- */  
  $('.recent-work-content').mixItUp();
  $("li:first-child.filter").addClass("active");

/*---------------------
fancybox
--------------------- */	
	$('.fancybox').fancybox();

/*----------------------------
     counter js active
------------------------------ */
$('.counter').counterUp({
    delay: 10,
    time: 2000
});
 
/*----------------------------
 Click btn search & cart on header 
------------------------------ */
$(".icon-search").on('click', function(){
	$(this).removeAttr('href');
	$('.search-form').toggleClass('active');
	$('.user-menu').removeClass('active');
	$('.mini-cart').removeClass('active');
});
$(".close-icon").on('click', function(){
	$(this).removeAttr('href');
	$('.search-form').removeClass('active');
});

$(".user-icon").on('click', function(){
	$(this).removeAttr('href');
	$('.user-menu').toggleClass('active');
	$('.mini-cart').removeClass('active');
});

$(".icon-cart").on('click', function(){
	$(this).removeAttr('href');
	$('.mini-cart').toggleClass('active');
	$('.user-menu').removeClass('active');
});

/*---------------------
 tooltip
--------------------- */
$('[data-toggle="tooltip"]').tooltip({
	animated: 'fade',
	placement: 'top',
	container: 'body'
}); 

/*---------------------
	 Category menu
--------------------- */
	$('#cate-toggle li.has-sub>a').on('click', function(){
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		}
		else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});
	$('#cate-toggle>ul>li.has-sub>a').append('<span class="holder"></span>');
/*---------------------
 Price Filter
--------------------- */
	var min_price = parseFloat('0');
	var max_price = parseFloat('90');
	var current_min_price = parseFloat($('#price-from').val());
	var current_max_price = parseFloat($('#price-to').val());
	$('#slider-price').slider({
	    range   : true,
	    min     : min_price,
	    max     : max_price,
	    values  : [ current_min_price, current_max_price ],
	    slide   : function (event, ui) {
	        $('#price-from').val(ui.values[0]);
	        $('#price-to').val(ui.values[1]);
	        current_min_price = ui.values[0];
	        current_max_price = ui.values[1];
	    },
	});

 /*---------------------
 top menu stick
--------------------- */

	$(window).scroll(function () {
	//STICK MENU
	  if ($(this).scrollTop() > 10) {
	    $('#sticker').addClass("stick");
	  } 
	  else {
	   	$('#sticker').removeClass("stick");
	  }
	  //TOP BER
	  if ($(this).scrollTop() > 50) {
	    $('.hide-show').addClass("disnone");
	  } 
	  else {
	   	$('.hide-show').removeClass("disnone");
	  };

	 });

	/*-------------------------------------------
    elevateZoom
    -------------------------------------------- */ 
    $("#zoom1").elevateZoom({
        gallery:'gallery_01',
        responsive : true, 
        cursor: 'pointer',
        zoomType: "inner", 
        galleryActiveClass: "active", 
        imageCrossfade: true
    });
    /*-------------------------------------------
    bxSlider
    -------------------------------------------- */ 
    $('.bxslider').bxSlider({
        slideWidth: 100,
        slideMargin:20,
        minSlides: 2,
        maxSlides: 3,
        pager: false,
        speed: 500,
        pause: 3000,
        adaptiveHeight: false
    });


  /*---------------------
	 Input Number Incrementer
	--------------------- */
	  //$(".numbers-row").append('<div class="inc button">+</div><div class="dec button">-</div>');
	  
	  $(".button").on("click", function() {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
		  var newVal = parseFloat(oldValue) + 1;
		} else {
		   // Don't allow decrementing below zero
		  if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
			} else {
			newVal = 0;
		  }
		  }
		$button.parent().find("input").val(newVal);

	  });
 

/*----------------------------
 product-carosul
------------------------------ */  
  $(".product-carosul").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [980,2],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 product-carosul
------------------------------ */  
  $(".product-carosul-2,.portfolio-related-item-carosul").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,2],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 product-carosul
------------------------------ */  
  $(".testomonial-carosul").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 blog-carosul
------------------------------ */  
  $(".blog-carosul").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,2],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });
/*----------------------------
 blog-carosul
------------------------------ */  
  $(".brand-logo-carosul").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:false,	  
      items : 5,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  });
/*----------------------------
 popular-category-carosul
------------------------------ */  
  $(".popular-category-carosul").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  });
/*----------------------------
 popular-category-carosul-2
------------------------------ */  
  $(".popular-category-carosul-2").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 2,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,2],
	  itemsDesktopSmall : [980,2],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  });
  
/* --------------------------------------------------------
   payment-accordion
* -------------------------------------------------------*/ 
  $(".payment-accordion").collapse({
    accordion:true,
    open: function() {
    this.slideDown(550);
    },
    close: function() {
    this.slideUp(550);
    }   
  });

/*-------------------------
  showlogin toggle function
--------------------------*/
   $( '#showlogin' ).on('click', function() {
        $( '#checkout-login' ).slideToggle(900);
     }); 
  
/*-------------------------
  showcoupon toggle function
--------------------------*/
   $( '#showcoupon' ).on('click', function() {
        $( '#checkout_coupon' ).slideToggle(900);
     });
   
/*-------------------------
  Create an account toggle function
--------------------------*/
   $( '#cbox' ).on('click', function() {
        $( '#cbox_info' ).slideToggle(900);
     });
   
/*-------------------------
  Create an account toggle function
--------------------------*/
   $( '#ship-box' ).on('click', function() {
        $( '#ship-box-info' ).slideToggle(1000);
     });


	   
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 	   
 
})(jQuery); 