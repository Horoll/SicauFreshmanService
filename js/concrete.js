$("#sidebar,.trends").stick_in_parent();

function s_1() {
	window.open("http://www.baidu.com/baidu?tn=gg5g&word=" + encodeURI(bd.key.value));
	return false;
};

$(function () {
 $('body').scrollspy({ target: '#navbar-example' });
});

$('.tz').click(function() {
	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
	}, 700);
	return false;
});