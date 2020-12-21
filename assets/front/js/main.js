/* =====================================
Template Name: Bizpro
Author Name: Shakil Hossain
Author URL: http://codeglim.com
Description: Bizpro is a complete One Page Business and Corporate HTML Template. You can use this template for your any business & corporate purpose.
Version:	1.1
========================================*/
/*================================================
[Start Activation Code]
================================================
	+ Mobile Menu
	+ Scroll Sticky
	+ One Page Nav
	+ Main Slider
	+ Team Hover
	+ Testimonial Carousel
	+ Portfolio Carousel
		+ Portfolio Single Slide	
	+ Magnific Popup
	+ Counter JS
	+ Clients Carousel
	+ Progress JS
	+ Social Hover
	+ Typed Js
	+ ScrollUp JS
	+ Animation JS
	+ Extra JS
	+ Google Map
	+ Background Video
	+ Preloader JS
======================================
[End Activation Code]
======================================*/
(function ($) {
	"use strict";
	$(document).ready(function () {

		/*====================================
		// 	Mobile Menu
		======================================*/
		$('.menu').slicknav({
			prependTo: ".mobile-nav",
		});

		/*======================================
		// Scrool Sticky
		======================================*/
		jQuery(window).on('scroll', function () {
			if ($(this).scrollTop() > 55) {
				$('.header').addClass("sticky animated fadeInDown");
				//$('.headerkontak').addClass("sticky animated fadeInDown headersub");
			} else {
				$('.header').removeClass("sticky animated fadeInDown");
				//$('.headerkontak').removeClass("sticky animated fadeInDown headersub");
			}
		});

		/*======================================
		//  Onepage Nav
		======================================*/
		if ($.fn.onePageNav) {
			$('.navbar-nav').onePageNav({
				currentClass: 'active',
				scrollSpeed: 600,
			});
			$('.slicknav_nav').onePageNav({
				currentClass: 'active',
				scrollSpeed: 600,
			});

		}

		/*======================================
		// Main Slider
		======================================*/
		var slidermain = $('.slide-main');
		var amountHeaderImages = slidermain.find('.single-slider').length;
		slidermain.owlCarousel({
			loop: (amountHeaderImages > 1),
			autoplay: false,
			autoplayHoverPause: true,
			smartSpeed: 1000,
			autoplayTimeout: 4000,
			mouseDrag: false,
			center: false,
			items: 1,
			animateIn: 'fadeIn',
			animateOut: 'fadeOut',
			nav: true,
			dots: true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		});

		/*======================================
		// Team Hover
		======================================*/
		$('.single-team').on('mouseenter', function () {
			$('.single-team').removeClass('active');
			$(this).addClass('active');
		});
		$('.single-team').on('mouseenter', function () {
			$('.single-team').removeClass('active');
			$(this).addClass('active');
		});


		/*======================================
		// Testimonial Carousel
		======================================*/
		$(".testimonial-carousel").owlCarousel({
			loop: true,
			autoplay: true,
			smartSpeed: 800,
			center: true,
			nav: true,
			items: 1,
			dots: false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		});

		/*======================================
		// Portfolio Carousel
		======================================*/
		$(".portfolio-carousel").owlCarousel({
			loop: false,
			autoplay: false,
			autoplayHoverPause: true,
			smartSpeed: 500,
			margin: 15,
			nav: false,
			dots: false,
			items: 2,
			// navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive: {
				300: {
					items: 1,
				},
				480: {
					items: 1,
				},
				768: {
					items: 2,
				},
				1170: {
					items: 2,
				},
			}
		});

		/*======================================
		// Portfolio Single Slide
		======================================*/
		$(".portfolio-single-slide").owlCarousel({
			loop: true,
			autoplay: true,
			smartSpeed: 500,
			autoplayTimeout: 3000,
			margin: 0,
			nav: true,
			dots: false,
			items: 1,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		});

		/*====================================
		// Magnific Popup
		======================================*/
		$('.video-play').magnificPopup({
			type: 'video',
		});

		// Portfolio Popup
		var magnifPopup = function () {
			// Portfolio Popup
			$('.zoom').magnificPopup({
				type: 'image',
				removalDelay: 300,
				mainClass: 'mfp-with-zoom',
				gallery: {
					enabled: true
				},
				zoom: {
					enabled: true, // By default it's false, so don't forget to enable it
					duration: 300, // duration of the effect, in milliseconds
					easing: 'ease-in-out', // CSS transition easing function
					opener: function (openerElement) {
						return openerElement.is('img') ? openerElement : openerElement.find('img');
					}
				}
			});
		};
		magnifPopup();

		/*======================================
		// Counter JS
		======================================*/
		$('.counter').counterUp({
			time: 1000
		});


		/*======================================
		// Clients Carousel
		======================================*/
		$(".clients-carousel").owlCarousel({
			loop: true,
			autoplay: true,
			autoplayTimeout: 2000,
			smartSpeed: 500,
			margin: 15,
			nav: false,
			dots: false,
			items: 5,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive: {
				300: {
					items: 1,
				},
				480: {
					items: 2,
				},
				768: {
					items: 4,
				},
				1170: {
					items: 5,
				},
			}
		});

		/*====================================
			progress-bar
		======================================*/
		$('.progress .progress-bar').each(function () {
			var $this = $(this);
			var width = $(this).data('percent');
			$this.css({
				'transition': 'width 1s'
			});
			setTimeout(function () {
				$this.appear(function () {
					$this.css('width', width + '%');
				});
			}, 500);
		});

		/*======================================
		// Social Hover
		======================================*/
		$('.footer-top .social li').on('mouseenter', function () {
			$('.social li').removeClass('active');
			$(this).addClass('active');
		});
		$('.footer-top .social li').on('mouseenter', function () {
			$('.social li').removeClass('active');
			$(this).addClass('active');
		});


		/*======================================
		// Typed JS
		======================================*/
		$(".info").typed({
			strings: ["Perfect Pixel Website", "Amazing Support", "Perfect Guidlines"],
			typeSpeed: 0,
			loop: false
		});

		/*======================================
		// Scrool Up
		======================================*/
		$.scrollUp({
			scrollName: 'scrollUp', // Element ID
			scrollDistance: 300, // Distance from top/bottom before showing element (px)
			scrollFrom: 'top', // 'top' or 'bottom'
			scrollSpeed: 1000, // Speed back to top (ms)
			easingType: 'linear', // Scroll to top easing (see http://easings.net/)
			animation: 'fade', // Fade, slide, none
			animationSpeed: 200, // Animation speed (ms)
			scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
			scrollTarget: false, // Set a custom target element for scrolling to. Can be element or number
			scrollText: ["<i class='fa fa-angle-up'></i>"], // Text for element, can contain HTML
			scrollTitle: false, // Set a custom <a> title if required.
			scrollImg: false, // Set true to use image
			activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			zIndex: 2147483647 // Z-Index for the overlay
		});

		/*======================================
	//  Wow JS
	======================================*/
		var window_width = $(window).width();
		if (window_width > 767) {
			new WOW().init();
		}

		/*====================================
			Extra JS
		======================================*/
		$('.button').on("click", function (e) {
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top - 70
			}, 1000);
			e.preventDefault();
		});
		$(
			"#contactForm input,#contactForm textarea,#contactForm button"
		).jqBootstrapValidation({
			preventSubmit: true,
			submitError: function ($form, event, errors) {
				// additional error messages or events
			},
			submitSuccess: function ($form, event) {
				event.preventDefault(); // prevent default submit behaviour
				// get values from FORM
				var name = $("input#name").val();
				var email = $("input#email").val();
				var phone = $("input#phone").val();
				var message = $("textarea#message").val();
				var base_url = $('#baseurl').val();
				var firstName = name; // For Success/Failure Message
				// Check for white space in name for Success/Fail message
				if (firstName.indexOf(" ") >= 0) {
					firstName = name.split(" ").slice(0, -1).join(" ");
				}

				$("#sendMessageButton").prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
				$.ajax({
					url: base_url + "sendcontactus",
					type: "POST",
					data: {
						name: name,
						phone: phone,
						email: email,
						message: message,
					},
					cache: false,
					beforeSend: function () {
						$("#sendMessageButton").html(' <i class="fa fa-circle-o-notch fa-spin"></i>Loading');
					},
					success: function () {
						// Success message
						$("#sendMessageButton").html('Kirim');
						$("#success").html("<div class='alert alert-success'>");
						$("#success > .alert-success")
							.html(
								"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
							)
							.append("</button>");
						$("#success > .alert-success").append(
							"<strong>Your message has been sent. </strong>"
						);
						$("#success > .alert-success").append("</div>");
						//clear all fields
						$("#contactForm").trigger("reset");
					},
					error: function () {
						// Fail message
						$("#sendMessageButton").html('Kirim');
						$("#success").html("<div class='alert alert-danger'>");
						$("#success > .alert-warning")
							.html(
								"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
							)
							.append("</button>");
						$("#success > .alert-danger").append(
							$("<strong>").text(
								"Sorry " +
								firstName +
								", it seems that my mail server is not responding. Please try again later!"
							)
						);
						$("#success > .alert-danger").append("</div>");
						//clear all fields
						$("#contactForm").trigger("reset");
					},
					complete: function () {
						setTimeout(function () {
							$("#sendMessageButton").prop("disabled", false); // Re-enable submit button when AJAX call is complete
						}, 1000);
					},
				});
			},
			filter: function () {
				return $(this).is(":visible");
			},
		});
		/*======================================
		// Google Map
		======================================*/
		// 	var map = new GMaps({
		// 			el: '.map',
		// 			lat: 23.810332,
		// 			lng: 90.412518,
		// 			scrollwheel: false,
		// 		});
		// 		map.addMarker({
		// 			lat: 23.810332,
		// 			lng: 90.412518,
		// 			title: 'Marker with InfoWindow',
		// 			infoWindow: {
		// 			content: '<p>Welcome to Codeglim</p>'
		// 		}
		// 	});
		/*====================================
			Background Video
		======================================*/
		// 	$('.player').mb_YTPlayer();	
		$(".imglistclient").on("click",function(){
			console.log(this);
			var imgsrc=$(this).data('img');
			$("#zoomImageModal").modal('show');
			document.getElementById('previewzoomimage').src=imgsrc;
		})
	});

	/*====================================
		Preloader JS
	======================================*/
	$(window).on('load', function () {
		$('.loader').fadeOut('slow', function () {
			$(this).remove();
		});
	});

})(jQuery);
