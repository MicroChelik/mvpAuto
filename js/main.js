$(document).ready(function(){
	$('.slider-reviews').slick({
		infinite: false,
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '.prev',
		nextArrow: '.next',
		dots: true,
		dotsClass: "my-dots",
		autoplay: false,
  		autoplaySpeed: 5000,
  		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
					dots: true,
					slidesToScroll: 1,
					autoplay: true,
  					autoplaySpeed: 5000,
				}
			}
		]
	});
	$('.slider-working-process').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		dotsClass: "my-dots",
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 6000,
				settings: "unslick",
			},
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
  					autoplaySpeed: 5000,
				}
			}
		]
	});
	$('#forward').click(function() {
		console.log('da');
		
		var className = $('#forward').attr('class');
		// alert(className);

		switch (className) {
		  case 'one':
		    if ($('#mark')[0].checkValidity()) {

		  	} else {
		  		break;
		  	}
		    // alert( 'da' );
		    $('.progress-yellow-line').css("width", "40%");
		    $('#forward').removeClass('one');
		    $('#forward').addClass('two');

		    $('#back').removeClass('one');
		    $('#back').addClass('two');

		    $('.first-q').removeClass('active');
		    $('.second-q').addClass('active');

		    $('.vic-sale-p b').html('20%');
		    $('.title span').html('2');
		    $('.subtitle span').html('40%');
		    break;
		  case 'two':
		  	if ($('#model')[0].checkValidity()) {

		  	} else {
		  		break;
		  	}
		    $('.progress-yellow-line').css("width", "60%");
		    $('#forward').removeClass('two');
		    $('#forward').addClass('three');

		    $('#back').removeClass('two');
		    $('#back').addClass('three');

		    $('.second-q').removeClass('active');
		    $('.third-q').addClass('active');

		    $('.vic-sale-p b').html('30%');
		    $('.title span').html('3');
		    $('.subtitle span').html('60%');
		    break;
		  case 'three':
		  	if ($('#km')[0].checkValidity()) {

		  	} else {
		  		break;
		  	}
		    $('.progress-yellow-line').css("width", "80%");
		    $('#forward').removeClass('three');
		    $('#forward').addClass('four');

		    $('#back').removeClass('three');
		    $('#back').addClass('four');

		    $('.third-q').removeClass('active');
		    $('.fours-q').addClass('active');

		    $('.vic-sale-p b').html('40%');
		    $('.title span').html('4');
		    $('.subtitle span').html('80%');
		    break;
	      case 'four':
	     	if ($('#recover')[0].checkValidity()) {

		  	} else {
		  		break;
		  	}
		    $('.progress-yellow-line').css("width", "100%");
		    $('#forward').removeClass('four');
		    $('#forward').addClass('five');

		    $('#back').removeClass('four');
		    $('#back').addClass('five');

		    $('.fours-q').removeClass('active');
		    $('.fives-q').addClass('active');

		    $('.vic-sale-p b').html('50%');
		    $('.title span').html('5');
		    $('.subtitle span').html('100%');
		    break;
		  case 'five':
		    $('.fives-q').removeClass('active');
		    $('.final').addClass('active2');

		    $('#back').removeClass('five');
		    $('#back').addClass('six');


		    // $('.progress-yellow-line').css("width", "100%");
		    // $('#forward').removeClass('one');
		    // $('#forward').addClass('two');
		    break;

		  case 'six':
		  break;

		  
		}

	});

	$('#back').click(function() {
		console.log('da');
		
		var className = $('#back').attr('class');
		// alert(className);
		console.log(className);


		switch (className) {
		  case 'one':
		    // alert( 'da' );
		    // $('.progress-yellow-line').css("width", "20%");
		    // $('#back').removeClass('two');
		    // $('#back').addClass('four');


		    // $('#forward').removeClass('one');
		    // $('#forward').addClass('two');
		    break;
		  case 'two':
		    $('.progress-yellow-line').css("width", "20%");
		    $('#back').removeClass('two');
		    $('#back').addClass('one');


		    $('#forward').removeClass('two');
		    $('#forward').addClass('one');

		    $('.second-q').removeClass('active');
		    $('.first-q').addClass('active');

		    $('.vic-sale-p b').html('10%');
		    $('.title span').html('1');
		    $('.subtitle span').html('20%');
		    break;
		  case 'three':
		    $('.progress-yellow-line').css("width", "40%");
		    $('#back').removeClass('three');
		    $('#back').addClass('two');


		    $('#forward').removeClass('three');
		    $('#forward').addClass('two');

		    $('.third-q').removeClass('active');
		    $('.second-q').addClass('active');

		    $('.vic-sale-p b').html('20%');
		    $('.title span').html('2');
		    $('.subtitle span').html('40%');
		    break;
	      case 'four':
		    $('.progress-yellow-line').css("width", "60%");
		    $('#back').removeClass('four');
		    $('#back').addClass('three');


		    $('#forward').removeClass('four');
		    $('#forward').addClass('three');

		    $('.fours-q').removeClass('active');
		    $('.third-q').addClass('active');

		    $('.vic-sale-p b').html('30%');
		    $('.title span').html('3');
		    $('.subtitle span').html('60%');
		    break;
		  case 'five':
		    $('.progress-yellow-line').css("width", "80%");
		    $('#back').removeClass('five');
		    $('#back').addClass('four');

		    $('#forward').removeClass('five');
		    $('#forward').addClass('four');

		    $('.fives-q').removeClass('active');
		    $('.fours-q').addClass('active');

		    $('.vic-sale-p b').html('40%');
		    $('.title span').html('4');
		    $('.subtitle span').html('80%');
		    break;
		  case 'six':
		    // $('.progress-yellow-line').css("width", "80%");
		    $('#back').removeClass('six');
		    $('#back').addClass('five');

		    $('#forward').removeClass('six');
		    $('#forward').addClass('five');

		    $('.final').removeClass('active2');
		    $('.fives-q').addClass('active');

		    // $('.vic-sale-p b').html('40%');
		    // $('.title span').html('4');
		    // $('.subtitle span').html('80%');
		    break;

		  
		}

	});
});