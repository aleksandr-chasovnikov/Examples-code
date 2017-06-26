<?php
session_start();

// Model
function checkUserData($login, $pass) {
    // Соединение с БД
    $db = new \PDO('mysql:dbname=myphpframework;host=MyMiniFramework', 'root', '');

    $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

    $result = $db->prepare($sql); //Вернёт объект

    $result->execute([':email' => $login, ':password' => $pass]);

    $user = $result->fetchAll(); //Вернёт массив

    if ($user) {
        // Если запись существует, возвращаем id пользователя
        return $user['id'];
    }
    return false;
}

// Controller
function login(){

	if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['pass'])) {

		$login = $_POST['login'];
		$pas = $_POST['pass'];

		// Проверить на соответствие логин и пароль
		$userId = checkUserData($login, $pass);

		// Поместить id юзера в сессию
		if($userId) {

			 $_SESSION['user'] = $userId;

            header("Location: /cabinet");
		}
	}

    require_once 'view/login.php';

}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Авторизация</title>
    </head>
    <body>

        <form id="form" action="hadler.php">
            <input type="email" name="email">
            <input type="password" name="password">
            <input type="submit" value="Отправить">
        </form>

    </body>
</html>