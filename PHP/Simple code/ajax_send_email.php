<?php  // файл: handler.php

$receiver = "asd@mai.ru";

$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = "Email: $email \r\n Phone: $phone";
$title = 'Новая заявка';

mail($receiver, $title, $message, "Content-type: text/plain; charset=\"utf-8\"\r\nFrom: $receiver");
?>


<!DOCTYPE html>
<html>
<head>
	<title>sdsdsd</title>
</head>
<body>
<div id="sss">dffgg</div>

<form id="form">
	<input type="email" name="email">
	<input type="number" name="phone">
	<input type="submit" value="Отправить">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
	
;(function($){

	$("#form").submit(function(){

		$.ajax({
			type: "POST",
			url: "/handler.php",
			data: $(this).serialize()
		}).done(function(){
			alert("Заявка отправлена");
		});
		return false;

	});

})(jQuery);

</script>

</body>
</html>