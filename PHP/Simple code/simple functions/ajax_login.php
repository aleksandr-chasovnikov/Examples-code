<?php

if( $_SERVER["REQUEST_METHOD"] == "POST" && $_POST["pass"] == '123456') {

	echo 'Пароь верный';

} else {
	
	echo 'Пароль неверный';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>sdsdsd</title>
</head>
<body>
<div id="sss">dffgg</div>

<form id="block">
	<input type="password" name="pass">
	<input type="submit" value="Отправить">
	<p id="mess"></p>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
	
;(function($){

	$("#form").submit(function(){
		var pass = $("#pass").val();
		if (pass) {

			$.ajax({
				type: "POST",
				url: "handler.php",
				data: "pass="+pass,
				dataType: "html",
				success: function(res) {

					if (data == 'Пароль верный') {						
						$("#block").fadeOut(500, function() {
							$("#h1-style").html(res).fadeIn(400);
						});
					} else {
						$("#mess").html(res).slideDown(300);
					}

				}
			});
		}
	});

})(jQuery);

</script>

</body>
</html>