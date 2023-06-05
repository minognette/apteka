<?php
// Получаем введенные данные из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Подключение к базе данных
$host = 'localhost';
$dbUsername = 'veramax3_aptekaa';
$dbPassword = 'Alsu-2000';
$dbName = 'veramax3_aptekaa';

$connection = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Проверяем подключение к базе данных
if ($connection->connect_error) {
  die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

// Подготовка запроса для получения данных пользователя
$query = "SELECT * FROM users_user WHERE username = '$username' AND password = '$password'";

// Выполнение запроса
$result = $connection->query($query);

// Проверяем, если результат содержит одну строку, значит пользователь существует
if ($result->num_rows == 1) {
  // Получаем данные пользователя из результата запроса
  $row = $result->fetch_assoc();

  // Успешная авторизация
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['role'] = $row['role'];
  
  $_SESSION['id_klient'] = $id_klient;

  // Проверяем роль пользователя и перенаправляем на соответствующую страницу
  if ($row['role'] === 'admin') {
    header("Location: dashboard_admin.php"); // Страница для администратора
  } else {
    header("Location: dashboard_user.php"); // Страница для обычного пользователя
  }
} else {
  // Неверные учетные данные
  echo "Неверное имя пользователя или пароль. Попробуйте еще раз.";
}

// Закрываем соединение с базой данных
$connection->close();
?>
