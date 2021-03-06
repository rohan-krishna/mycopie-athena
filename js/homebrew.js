$(document).ready(function() {

	var container = $('.page-wrapper'),
		triggerBtn = $('#trigger-overlay'),
		overlay = $('.overlay'),
		closeBtn = $('.overlay-close');

	function toggleOverlay()
	{
		if($(overlay).hasClass('open')) {
			$(overlay).removeClass('open');
			$(container).removeClass('overlay-open');
			$(overlay).addClass('close');
		} else {
			$(overlay).addClass('open');
			$(container).addClass('overlay-open');
		}
	}

	$(triggerBtn).click(function() {
		toggleOverlay();
	});

	$(closeBtn).click(function() {
		toggleOverlay();
	});


	//Owl Carousel
	$('.slide-wrapper').owlCarousel({
		items : 1
	});

	$('#testimonialSlider').owlCarousel({
		items : 1
	});

	$('#owlTest').owlCarousel({
		items: 5,
		autoplay : true
	});
	$('#buddySlider').owlCarousel({
		items: 5,
		autoplay: true
	});

	$('#PartnersSlider').owlCarousel({
		pagination : false,
		autoplay : 3000
	});



	//Waves Attach and init
	Waves.attach('.waves-btn',['waves-button','waves-float']);
	Waves.attach('.waves-img');
	Waves.attach('.waves-icon',['waves-circle']);
	Waves.init();


	//Smooth Scroll
	$(function() {
  		$('a[href*=#]:not([href=#])').click(function() {
    		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      			var target = $(this.hash);
      			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      		if (target.length) {
        		$('html,body').animate({
          			scrollTop: target.offset().top
        		}, 1000);
        		return false;
      			}
    		}
  		});
	});


});