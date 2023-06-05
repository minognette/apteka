<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css">
  <title>Аптечная аптека</title>
  <style>
    body {
      background-image: url("bg111.jpg");
      background-size: cover;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 0;
      background-color: #f1f1f1;
      font-family: 'Montserrat', sans-serif;
      font-size: 18px;
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
  </style>
</head>
<body>
  <div class="header">
    <div class="logo">
      <img src="logo1.png" alt="/">
      Аптечная<br>аптека
    </div>
    <a class="enter" href="avtoris.php">Войти</a>
    <a class="enter" href="map.php">Карта</a>
  </div>
</body>
</html>
