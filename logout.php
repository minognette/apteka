<?php
session_start();

// Уничтожаем все данные сессии
session_unset();
session_destroy();

// Перенаправляем пользователя на страницу авторизации
header("Location: avtoris.php");
exit();
?>