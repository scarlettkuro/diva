$(document).ready(function(){

	$(".bxslider").bxSlider({
		infiniteLoop: true,
		nextSelector: '#slider-next',
			prevSelector: '#slider-prev',
			slideWidth: 100,
			minSlides: 3,
			maxSlides: 5,
			moveSlides: 1,
	});

	$("input[name='tabs']").bind('click', function(){

		if($("#tab-1").is(":checked")){

		$("#desc-1").css("display", "block");
	}
	else {
		$("#desc-1").css("display", "none");
	}

	if($("#tab-2").is(":checked")){

		$("#desc-2").css("display", "block");
	}
	else {
		$("#desc-2").css("display", "none");
	}

	if($("#tab-3").is(":checked")){

		$("#desc-3").css("display", "block");
	}
	else {
		$("#desc-3").css("display", "none");
	}

	if($("#tab-4").is(":checked")){

		$("#desc-4").css("display", "block");
	}
	else {
		$("#desc-4").css("display", "none");
	}

	if($("#tab-5").is(":checked")){

		$("#desc-5").css("display", "block");
	}
	else {
		$("#desc-5").css("display", "none");
	}

	});

});