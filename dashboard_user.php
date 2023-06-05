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
    <div class="header-buttons">
    <a href="apteki_user.php"><button>Аптеки</button></a>
      <a href="lekarstvo_user.php"><button>Каталог лекарств</button></a>
      <button>Как добраться</button>
      <a href="kabinet.php"><button>Личный кабинет</button>
    </div>
    <a class="enter" href="logout.php">Выйти</a>
  </div>
  <h1>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</h1>
  <p>Сделайте заказ, перейдя в каталог лекарств</p>
  <a class="catalog-button" href="lekarstvo_user.php">Каталог лекарств</a>
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
    font-family: 'Montserrat Light', sans-serif;
    font-size: 18px;
    overflow-y: auto;
  }

  .header {
    display: flex;
    justify-content: center;
    background-color: #2C4351;
    width: 100%;
    height: 80px;
    gap: 30px;
    margin: auto;
  }

  .header button {
    margin: 0 5px;
    padding: 5px 10px;
    font-size: 18px;
    font-weight: 300; /* Можно задать жирность шрифта Light */
    font-family: 'Montserrat Light', sans-serif; /* Применяем шрифт Montserrat Light */
    background-color: #2C4351;
    color: #fff;
    border: none;
    cursor: pointer;
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
    font-family: 'Montserrat Light', sans-serif; /* Применяем шрифт Montserrat Light */
  }

  .enter {
   margin-top: 2px;
   float: right;
   color: #fff;
   display: flex;
   justify-content: center;
   align-items: center;
   font-family: 'Montserrat Light', sans-serif; /* Применяем шрифт Montserrat Light */
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

  .catalog-button {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    padding: 15px 30px;
    font-size: 24px;
    color: #fff;
    background-color: #2C4351;
    border: none;
    cursor: pointer;
    text-decoration: none;
    border-radius: 10px;
    transition: background-color 0.5s;
    font-family: 'Montserrat Light', sans-serif; /* Применяем шрифт Montserrat Light */
  }

  .catalog-button:hover {
    background-color: rgba(44, 67, 81, 0.5);
  }

  .header-buttons {
    display: flex;
    align-items: center;
  }
</style>
</html>
