<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Консоль SQL</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    h2 {
      margin-bottom: 20px;
    }
    textarea {
      width: 100%;
      height: 200px;
      margin-bottom: 10px;
      padding: 5px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      text-decoration: none;
      margin-right: 10px;
    }
    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Консоль SQL</h2>
    <form method="post" action="">
      <textarea name="sql_query" placeholder="Введите SQL-запрос"></textarea>
      <br>
      <input type="submit" name="submit" value="Выполнить" class="btn">
    </form>
    <br>

    <?php
    // Подключение к базе данных
    $host = 'localhost';
    $dbUsername = 'veramax3_aptekaa';
    $dbPassword = 'Alsu-2000';
    $dbName = 'veramax3_aptekaa';

    try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $dbUsername, $dbPassword);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      if (isset($_POST['submit'])) {
        $sql = $_POST['sql_query'];

        try {
          $stmt = $pdo->prepare($sql);
          $stmt->execute();

          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if ($result) {
            echo "<h3>Результат запроса:</h3>";
            echo "<pre>";
            print_r($result);
            echo "</pre>";
          } else {
            echo "Запрос выполнен успешно, но результаты не найдены.";
          }
        } catch (PDOException $e) {
          echo "Ошибка выполнения запроса: " . $e->getMessage();
        }
      }
    } catch (PDOException $e) {
      die("Ошибка подключения к базе данных: " . $e->getMessage());
    }
    ?>

  </div>
</body>
</html>
