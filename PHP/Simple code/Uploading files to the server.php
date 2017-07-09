<?php

$name = basename( $_FILES['img']['name'] );

$path = implode(DIRECTORY_SEPARATOR, array(__DIR__, 'upload', $name) );

if ( is_uploaded_file( $_FILES['img']['tmp_name'] ) ) {

    $res = move_uploaded_file( $_FILES['img']['tmp_name'], $path );

    if ($res) {
        $message = 'Готово!';
    } else {
        $message = 'Ошибка! Неудалось переместить файл.';
    }
} else {  
    $message = 'Ошибка! Неудалось загрузить файл. Возможно слишком большой файл.';
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Загрузка файлов</title>
    </head>
    <body>

        <form id="form" action="hadler.php" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
            <input type="file" name="imп">
            <input type="submit" value="Загрузить">
        </form>

    </body>
</html>