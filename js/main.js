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
});