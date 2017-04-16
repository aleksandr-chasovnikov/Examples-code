; (function($){

	//Удаляем класс навсякий случай, что не мешал
	$('.header').removeClass("default");

	$(window).scroll(function(){

		//Если проскролили на 20px
		if ($(this).scrollTop()>20) {

			//Добавить класс "default" со свойствами: {position: fixed; top: 0;}
			$('.header').addClass("default").fadeIn("fast");

		} else {

			$('.header').removeClass("default");

		};

	});

})(jQuery);