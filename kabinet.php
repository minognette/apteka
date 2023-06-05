<!DOCTYPE html>
<html>
<head>
    <title>Личный кабинет</title>
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
          margin-bottom: 20px; /* Добавлено для отступа от следующего элемента */
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
          max-width: 600px;
          margin: 0 auto;
          padding: 20px;
          font-family: Montserrat Light, sans-serif;
        }

        h1 {
          text-align: left; /* Изменено на выравнивание по левому краю */
          margin-left: 10px; /* Добавлен отступ слева */
        }

        .user-info {
          margin-top: 30px;
        }

        p {
          margin: 10px 0;
          text-align: left; /* Изменено на выравнивание по левому краю */
          margin-left: 10px; /* Добавлен отступ слева */
        }

        span {
          font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Личный кабинет</h1>
        <div class="nav-buttons">
            <a href="dashboard_user.php" style="margin-right: 10px;">Главная</a>
        </div>
      </div>
    <div class="container">
        <h1>Информация о пользователе</h1>
        <div class="user-info">
            <p><strong>Имя пользователя:</strong> <span id="username"></span></p>
            <p><strong>E-mail:</strong> <span id="email"></span></p>
            <p><strong>Номер телефона:</strong> <span id="phone"></span></p>
        </div>
    </div>
    <tbody>
      <?php
        // Подключение к базе данных
        $servername = 'localhost';
        $username = 'veramax3_aptekaa';
        $password = 'Alsu-2000';
        $dbname = 'veramax3_aptekaa';

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Проверка соединения
        if ($conn->connect_error) {
            die('Ошибка подключения к базе данных: ' . $conn->connect_error);
        }

        // Запрос на получение информации о пользователе
        $sql = "SELECT username, email, phone FROM users_user WHERE id_user = 1"; // Замените "1" на нужный вам идентификатор пользователя

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $username = $row['username'];
            $email = $row['email'];
            $phone = $row['phone'];
        } else {
            $username = 'Пользователь не найден.';
            $email = '';
            $phone = '';
        }

        $conn->close();
      ?>
    </tbody>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.getElementById('username').textContent = '<?php echo $username; ?>';
            document.getElementById('email').textContent = '<?php echo $email; ?>';
            document.getElementById('phone').textContent = '<?php echo $phone; ?>';
        });
    </script>
</body>
</html>
