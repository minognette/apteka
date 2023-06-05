
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
    <button>Аптеки</button>
    <button>Ассортимент</button>
    <button>Лекарства</button>
    <button>Как добраться</button>
    <button>Личный кабинет</button>
    <a class="enter" href="logout.php">Выйти</a>
  </div>
</body>
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

  .header button {
    margin: 0 5px;
    padding: 5px 10px;
    font-size: 18px;
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
</html>