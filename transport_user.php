<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Аптечная аптека</title>
  <style>
    body {
      font-family: Montserrat Light, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #2C4351;
      padding: 20px;
      text-align: center;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header h1 {
      color: #FFF;
      margin: 0;
    }

    .header a {
      color: #FFF;
      text-decoration: none;
      font-size: 18px;
      margin-right: 10px;
    }

    .container {
      margin: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th, table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #CCC;
    }

    table th {
      background-color: #F5F5F5;
    }

    table td {
      background-color: #FFF;
    }

    table tr:hover td {
      background-color: #F0F0F0;
    }

    .center {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Каталог лекарств</h1>
    <div class="nav-buttons">
      <a href="dashboard_user.php" style="margin-right: 10px;">Главная</a>
    </div>
  </div>
  
  <div class="container">
    <table>
      <thead>
        <tr>
          <th>ID лекарства</th>
          <th>Объем</th>
          <th>Название лекарства</th>
          <th>Форма упаковки</th>
          <th>Цена упаковки</th>
          <th>Назначение</th>
          <th>Основное вещество</th>
          <th class="center">Количество в упаковке</th>
        </tr>
      </thead>
      <tbody>
        <?php
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

          // Запрос для получения данных из таблицы лекарств
          $query = "SELECT l.id_lekarstvo, CONCAT(o.Ves, ' ', o.Ed_izm) AS obyomspr, l.name_lekarstvo, f.Forma_upak, CONCAT(l.price_upak, ' ', '&#8381;') AS price_upak, n.naznachen, l.osn_veshestvo, l.kolvo_vupak 
                    FROM lekarstvo AS l
                    INNER JOIN obyomspr AS o ON l.Id_ob = o.Id_ob
                    INNER JOIN forma_upakovkispr AS f ON l.form_upak = f.Id_upak
                    INNER JOIN naznacheniespr AS n ON l.naznachenie = n.Id_naznach"; 

          $result = $connection->query($query);

          if ($result->num_rows > 0) {
            // Выводим данные в таблицу
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row['id_lekarstvo'] . "</td>";
              echo "<td>" . $row['obyomspr'] . "</td>";
              echo "<td>" . $row['name_lekarstvo'] . "</td>";
              echo "<td>" . $row['Forma_upak'] . "</td>";
              echo "<td>" . $row['price_upak'] . "</td>";
              echo "<td>" . $row['naznachen'] . "</td>";
              echo "<td>" . $row['osn_veshestvo'] . "</td>";
              echo "<td class='center'>" . $row['kolvo_vupak'] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='8'>Нет доступных данных</td></tr>";
          }

          // Закрываем соединение с базой данных
          $connection->close();
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
