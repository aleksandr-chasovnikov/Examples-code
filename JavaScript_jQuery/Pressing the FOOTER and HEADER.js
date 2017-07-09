//Прижимаем футер к низу, а хэдер к верху
// ; $(function(){

// var hf = function(){
// 	var h_header = $('header').height();
// 	var h_footer = $('footer').height();
// 	$('.content').css({
// 		'paddingTop': h_header,
// 		'paddingBottom': h_footer
// 	});
// }

// $(window).bind('load resize', hf);

// });

/*=== Pressing the foot to the bottom (Bootstrap 3) ===*/
// ; (function($){
// 	if ( $(document).height() = $(window).height() ) {

// 	  $("footer.footer").addClass("navbar-fixed-bottom");

// 	};
// })(jQuery);
/*=======================================*/
; (function(){
	if (  document.body.scrollHeight < window.screen.height ) {

	  var x = document.getElementsByClassName("footer")[0].setAttribute("class", "navbar-fixed-bottom");

	};
})();
/*=======================================*/