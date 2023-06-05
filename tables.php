<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Таблицы</title>
  <style>
    body {
      font-family: Montserrat Light, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      margin: 20px;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }

    a {
      text-decoration: none;
      font-size: 18px;
      color: #2C4351;
    }

    .back-button {
      margin-bottom: 10px;
    }

    .back-button a {
      text-decoration: none;
      font-size: 18px;
      color: #2C4351;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="back-button">
      <a href="dashboard_admin.php">&lt; Назад</a>
    </div>
    <h1>Таблицы</h1>
    <ul>
      <li><a href="Admin_apteki/apteki.php">Аптеки</a></li>
      <li><a href="Admin_assortiment/assortiment.php">Ассортимент</a></li>
      <li><a href="Admin_transport/transport.php">Транспорт</a></li>
      <li><a href="zayavki_lekarstva.php">Запросы на лекарства</a></li>
      <li><a href="Admin_lekarstvo/lekarstvo.php">Лекарства</a></li>
      <li><a href="Admin_formaUpak/FormaUpak.php">Форма упаковки (справочник)</a></li>
      <li><a href="Admin_naznachenie/naznachenie.php">Назначение (справочник)</a></li>
      <li><a href="Admin_obyom/obyom.php">Объем (справочник)</a></li>
      <li><a href="klienty.php">Клиенты</a></li>
      <li><a href="dannye_polzovatelya.php">Данные пользователя</a></li>
      <li><a href="lekarstvo.php">Заказы</a><li>
      <li><a href="message/message.html">Отправить письмо</a><li>
    </ul>
  </div>
</body>
</html>
