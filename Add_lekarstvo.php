<?php
// Подключение к базе данных
$host = 'localhost';
$dbUsername = 'veramax3_aptekaa';
$dbPassword = 'Alsu-2000';
$dbName = 'veramax3_aptekaa';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $dbUsername, $dbPassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Ошибка подключения к базе данных: " . $e->getMessage());
}

// Получение данных из POST-запроса
$Id_lekarstvo = $_POST['Id_lekarstvo'];
$Id_ob = $_POST['Id_ob'];
$name_lekarstvo = $_POST['name_lekarstvo'];
$form_upak = $_POST['form_upak'];
$price_upak = $_POST['price_upak'];
$naznachenie = $_POST['naznachenie'];
$osn_veshestvo = $_POST['osn_veshestvo'];
$kolvo_vupak = $_POST['kolvo_vupak'];

// Подготовка и выполнение SQL-запроса для добавления данных
$query = "INSERT INTO lekarstvo (Id_lekarstvo, Id_ob, name_lekarstvo, form_upak, price_upak, naznachenie, osn_veshestvo, kolvo_vupak) VALUES ('$Id_lekarstvo', '$Id_ob', '$name_lekarstvo', '$form_upak', '$price_upak', '$naznachenie', '$osn_veshestvo', '$kolvo_vupak')";


?>
