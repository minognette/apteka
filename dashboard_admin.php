<?php
session_start();

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['username'])) {
  // Если пользователь не авторизован, перенаправляем на страницу авторизации
  header("Location: avtoris.php");
  exit();
}
?>

<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css">
  <title>Аптечная аптека</title>
</head>
<body>
  <div class="header">
    <div class="logo">
      <img src="logo1.png" alt="/">
      Аптечная<br>аптека
    </div>
    <a href="tables.php"><button class="menu-button">Таблицы</button></a>
    <a href="konsol.php"><button class="menu-button">Консоль</button></a>
    <a class="enter" href="logout.php">Выйти</a>
  </div>
  <h1>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</h1>
</body>
<style>
  body {
    background-image: url("bg111.jpg");
    background-size: cover;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0;
    background-color: #f1f1f1;
    font-family: Montserrat Light, sans-serif;
    font-size: 18px;
    overflow-y: auto;
  }

  .header {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #2C4351;
    width: 100%;
    height: 80px;
    margin: auto;
  }

  .logo img {
    height: 50px;
    width: 60px;
  }

  .logo {
    display: flex;
    align-items: center;
    gap: 15px;
    color: white;
  }

  .header a {
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
  }

  .header .menu-button {
    margin: 0 5px;
    padding: 5px 10px;
    font-size: 18px;
    background-color: #2C4351;
    color: #fff;
    border: none;
    cursor: pointer;
    font-family: Montserrat Light, sans-serif;
  }

  .enter {
    margin-top: 2px;
    float: right;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .enter:hover {
    color: #fff;
  }

  h1 {
    text-align: left;
    margin-top: 120px;
    font-size: 40px;
    color: #000;
  }
</style>
</html>
