<?php

$newName = './upload/' . basename( $_FILES['image']['name'] );

if ( is_uploaded_file( $_FILES['image']['tmp_name'] ) ) {

	$res = move_uploaded_file( $_FILES['image']['tmp_name'], $newName );

	if ($res) {
		echo 'Файл заружен!';
	} else {
		echo 'Не удалось загрузить файл';
	}
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Загрузка файлов</title>
    </head>
    <body>

        <form id="form" action="hadler.php" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Загрузить">
        </form>

    </body>
</html>