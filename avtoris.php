<?php
// Параметры подключения к базе данных
$host = 'localhost';  // Хост базы данных
$dbname = 'veramax3_aptekaa';  // Имя базы данных
$username = 'veramax3_aptekaa';  // Имя пользователя базы данных
$password = 'Alsu-2000';  // Пароль пользователя базы данных

try {
  // Подключение к базе данных с использованием PDO
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  // Установка режима обработки ошибок
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Другие действия с базой данных...

} catch (PDOException $e) {
  // Обработка ошибок подключения
  echo "Ошибка подключения к базе данных: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css">
  <title>Аптека</title>
</head>
<body>
    <div class="container">
        <h1>Добро пожаловать<br>в справочник по аптекам города!</h1>
        <p>Для дальнейшей работы необходимо авторизоваться.</p>
        <form action="login.php" method="POST">
            <input type="text" name='username' placeholder="Логин или Email" required>
            <input type="password" name='password' placeholder="Пароль" required>
            <input type="submit" value="Войти">
        </form>
        <p>Еще нет аккаунта? <a href="registration.html">Зарегистрируйтесь</a></p>
    </div>
</body>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f1f1f1;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        height: 400px;
        text-align: center;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 50px;
    }

    .container h1 {
        font-size: 24px;
        padding: 5px;
        margin-bottom: 10px;
    }

    .container p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .container form {
        display: flex;
        flex-direction: column;
        height: 200px;
        width: 500px;
    }

    .container input[type="text"],
    .container input[type="password"] {
        text-align: center;
        margin: 10px auto 10px auto;
        padding: 5px;
        width: 280px;
        height: 40px;
        font-size: 16px;
        border-radius: 4px;
        gap: 25px;
        border: 1px solid #ccc;
    }

    .container input[type="submit"] {
        margin-left: auto;
        margin-right: auto;
        margin-top: 10px;
        width: 300px;
        height: 60px;
        font-size: 16px;
        border-radius: 14px;
        border: none;
        background-color: black;
        color: #fff;
        cursor: pointer;
    }

    .container input[type="submit"]:hover {
        transition-duration: 0.2s;
        background-color: #2C4351;
    }
</style>
</html>