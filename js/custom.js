
'use strict';

$(window).on('load', function() { 
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut(); 
	$("#preloder").delay(50).fadeOut("slow");

	if($('.portfolios-area').length > 0 ) {
		var containerEl = document.querySelector('.portfolios-area');
		var mixer = mixitup(containerEl);
	}

});

(function($) {

	/*------------------
		Navigation
	--------------------*/
	$('.nav-switch').on('click', function(event) {
		$('.main-menu').slideToggle(400);
		event.preventDefault();
	});



	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});



	/*----------------------
		Portfolio layout
	------------------------*/
	var port_fi =  $('.portfolios-area .first-item'),
		port_si =  $('.portfolios-area .second-item'),
		port_intro_h =  $('.portfolio-intro').innerHeight();

	if ($(window).width() > 991) {
		port_fi.appendTo('.portfolio-intro');
		port_si.find('.portfolio-item').height(port_intro_h + 601);
	}

	$('.portfolio-item.pi-style2').each(function() {
		var pi_width = $(this).width();
		$(this).height(pi_width + 50);
	});



	/*------------------
		Popup
	--------------------*/
	// $('.portfolio-item').magnificPopup({
	// 	type: 'image',
	// 	mainClass: 'img-popup-warp',
	// });


	/*------------------
		typed
	--------------------*/
	var typed = new Typed('#typed', {
		stringsElement: '#typed-strings',
		backSpeed: 40,
		typeSpeed: 40,
		loop: true
	});


	/*------------------
		menu active
	--------------------*/
	$('.main-menu ul li a').on('click', function (e) {
		$('.main-menu ul li a').removeClass('selected');
		$(this).addClass('selected');
		
	});


	
})(jQuery);


	/*------------------
		go to top
	--------------------*/

	 $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
	// scroll body to 0px on click
	$('#back-to-top').on('click', function () {
		$('body,html').animate({
			scrollTop: 0
		}, 100);
		return false;
	});

function confettiFunction() {
	confetti.start()
	$.magnificPopup.open({
        items: {
            src: '<div class="clown-popup">🤡🤡🤡🤡🤡🤡🤡🤡🤡🤡🤡🤡🤡🤡🤡🤡🤡🤡<br>Congratulations!<br>I hereby pronounce you chief clown of the entire cosmos<br>I even warned you fgs. <br>You are not a clown, you are the entire circus- nay the very concept of comedic public performers. <br> You really thought in big 2020 I went and learned PHP from scratch, processed a form and configured a whole server <strong>just</strong> to send an email from my own website to myself...<br> I mean I get we were in quarantine for a couple months but duuuuuuuuuude, who is trying to learn PHP<br> not to mention I have plastered about 47 different social media links all over this website so why dont you try to contact me like a normal person? Is it too much effort? Is that <strong>really</strong> too much to ask man, Im actually tired. Smh. Do better.</div>',
            type: 'inline'
        }
    });
	setTimeout(function() {confetti.stop()}, 5000);
}
