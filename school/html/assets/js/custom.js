(function($) {

         "use strict";
		 
		 // preloader
		 $('#loading').delay(1500).fadeOut(500);
		 
		 // fixed menu 
		 
		$(window).scroll(function() {
			if($(this).scrollTop()>90) {
				$( ".header-bottom" ).addClass("fixed-nav");
			} else {
				$( ".header-bottom" ).removeClass("fixed-nav");
			}
		});
		
	      // Responsive Menu
		  
          $('#toggle').click(function() {
		   $(this).toggleClass('active');
		   $('.overlay-close').toggleClass('overlay-open');
		  });
		  
		   // Back To Top
		   
		  if ($('#back-to-top').length) {
			var scrollTrigger = 100, 
				backToTop = function () {
					var scrollTop = $(window).scrollTop();
					if (scrollTop > scrollTrigger) {
						$('#back-to-top').addClass('show');
					} else {
						$('#back-to-top').removeClass('show');
					}
				};
			backToTop();
			$(window).on('scroll', function () {
				backToTop();
			});
			$('#back-to-top').on('click', function (e) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: 0
				}, 700);
			});
		}
		// Themeix Slider OwlCarousel
		
		$('.themeix-slider').owlCarousel({
			autoplay: true,
            loop: true,
			animateIn: 'flipInX',
			items:1,
			mouseDrag:false,
			margin:30,
			smartSpeed:450
		});
		
		// Themeix Aside OwlCarousel
		
		$('.themeix-aside-slider').owlCarousel({
			autoplay: true,
            loop: true,
			dots:false,
			animateIn: 'fadeIn',
			items:1,
			mouseDrag:false,
			margin:30,
			smartSpeed:450
		});
		
		// Themeix Author Slider OwlCarousel
		
		$('.themeix-author-slider').owlCarousel({
			autoplay: true,
            loop: true,
			items:1,
			mouseDrag:false,
			margin:30,
			smartSpeed:450
		});
		
		// Themeix Media Slider OwlCarousel
		
		$('.themeix-media-slider').owlCarousel({
			autoplay: true,
			loop: true,
			smartSpeed: 1000,
			margin: 30,
			responsive: {
				0: {
					items: 1,

				},
				768: {
					items: 1,

				},
				769: {
					items: 2,
				},
				1000: {
					items: 3,
				}
			}
		});
		
		 // Google Map 

		function ourCustomMap() {


			if ($("#myMap").length > 0) {

				var map;

				var mapId = document.getElementById("myMap");

				var mLatLng = new google.maps.LatLng(26.8130862, -80.6685252);

				map = new google.maps.Map(mapId, {

					center: mLatLng,
					zoom: 17,
					zoomControl: true,
					streetViewControl: true,
					scrollwheel: false


				});
		   var contentString = '<div id="content">'+
				'<div id="siteNotice">'+
				'</div>'+
				'<h3 id="firstHeading" class="firstHeading">Next Blog</h3>'+
				'<div id="bodyContent">'+
				'<p>' +
				'1317 Rardin Ave Pahokee, <br />FL 33476  </p>'+
				'</div>'+
				'</div>';

			var infowindow = new google.maps.InfoWindow({
			  content: contentString,
			  maxWidth: 200
			});

				
				var marker = new google.maps.Marker({

					position: mLatLng,
					map: map,
					title: "Our Company Office Location",
					icon: "images/marker.png",
					animation: google.maps.Animation.BOUNCE
				});
			marker.addListener('click', function() {
			  infowindow.open(map, marker);
			});
				
			}
		}

		ourCustomMap();
		
})(jQuery);