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

var move = function() {
	var top = $(window).scrollTop();
	var sidebar = $("#sidebar");
	var content = $("#content");
	var mark = content.offset().top;
	if (top > mark) {
		sidebar.css({
			position: "fixed",
			top: "0px",
			left: content.offset().left - sidebar.width() - $(window).scrollLeft() + 125 
		});
	} else {
		sidebar.css({
			position: "absolute",
			top: "",
			left: content.offset().left - sidebar.width() + 125 
		});
	}
};

$(window).scroll(move);
$(window).resize(move);
move();
move();

