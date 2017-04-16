; (function($){
//Плавная прокрутка по якорям <a name="nameAnchor">

	$('a[href^="#"]').click(function(){

		elementClick = $(this).attr('href');

		destination = $(elementClick).position().top;

		if($.browser.safari){

			//Скролим на дистанцию "destination" за 1 сек
			$('body').animate( { scrollTop: destination }, 1000); 

		} else {

			$('html').aimate( { scrollTop: destination }, 1000);

		}

		return false;

	});

})(jQuery);