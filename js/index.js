$(function() {
		$(".flexslider").flexslider({
			slideshowSpeed: 4000, //展示时间间隔ms
			animationSpeed: 400, //滚动时间ms
			touch: true //是否支持触屏滑动
		});
});
	
$('#btn-1').click(function() {
	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
	}, 500);
	return false;
});

$('#btn-2').click(function() {
	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
	}, 500);
	return false;
});

$('#btn-3').click(function() {
	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
	}, 800);
	return false;
});

$('#btn-4').click(function() {
	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
	}, 500);
	return false;
});