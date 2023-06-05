<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css">
  <title>Аптечная аптека</title>
  <style>
    body {
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

    .map-container {
      display: flex;
      justify-content: flex-end;
      margin-top: 40px;
      margin-right: 20px;
      width: 60%;
    }

    .map-container iframe {
      width: 100%;
      height: 400px;
    }
  </style>
</head>
<body>
  <div class="header">
    <div class="logo">
      <img src="logo1.png" alt="/">
      Аптечная<br>аптека
    </div>
    <a class="enter" href="header.php">Назад</a>
  </div>
  <div class="map-container">
    <iframe src="https://yandex.ru/map-widget/v1/?ll=37.617700%2C55.755863&z=10" width="560" height="400" frameborder="1" allowfullscreen="true"></iframe>
  </div>
</body>
</html>