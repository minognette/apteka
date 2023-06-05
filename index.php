<?php
    // Параметры подключения к базе данных
    $servername = "localhost"; // Адрес сервера базы данных
    $username = "veramax3_aptekaa"; // Имя пользователя базы данных
    $password = "Alsu-2000"; // Пароль пользователя базы данных
    $dbname = "veramax3_aptekaa"; // Имя базы данных

    // Создание подключения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка подключения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Здесь вы можете выполнять операции с базой данных

    // Закрытие соединения
    $conn->close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css">
  <title>Аптека</title>
</head>
<body>
  <?php require "header.php"?>
</html>