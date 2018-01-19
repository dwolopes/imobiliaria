$(document).ready(function(){
	$(".button-collapse").sideNav();
	$(".slider").slider({full_width: true});
});

function sliderPrev(){
	$(".slider").slider('pause');
	$(".slider").slider('prev');
	$(".slider").slider('start');
}

function sliderNext(){
	$(".slider").slider('pause');
	$(".slider").slider('next');
	$(".slider").slider('start');
}