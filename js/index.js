$(".nav-btn").hover(function() {
    $(this).toggleClass("open closed");
});

// scrollFun from http://codepen.io/Ratko_Solaja/pen/gFnAe
jQuery.fn.niceScroll = function() {
	$(this).click(function(e) {
		var h = $(this).attr('href'),
		target;

		if (h.charAt(0) == '#' && h.length > 1 && (target = $(h)).length > 0){
			var pos = Math.max(target.offset().top, 0);
			e.preventDefault();
			$('body,html').animate({
				scrollTop : pos
			}, 'slow', 'swing');
		}
	});
};
$('.scroll').niceScroll();