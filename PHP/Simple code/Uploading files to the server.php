<?php
/* https://cleverman.org/post/37

в базе данных сохранять только название файла, без пути к этому файлу. Это дает возможность в любой момент перенести ваши, уже сохраненные изображения, куда угодно. Хоть в облако, хоть на другой сервер. Прописать путь к базовому хранилищу можно в едином файле настроек. Такой подход никогда не побьет ваши ссылки, а шаблоны всегда будут знать от куда подгружать изображения.

Следующий момент - это возможность располагать изображения автоматически в разные папки, в зависимости от типа контента.*/

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