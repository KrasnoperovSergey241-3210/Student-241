<?php
session_start(); // Обязательно запускаем сессию
$_SESSION['message'] = 'Привет, это данные из первой страницы!';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Страница 1</title>
</head>
<body style='background-color: black;'>
    <h1 style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px;'>Данные записаны в сессию!</h1>
    <a style='background-image: linear-gradient( #75188f,  #410a47); border-radius: 50px; color: white; font-family: sans-serif; text-align: center; margin: 40px auto; text-decoration: none; font-weight: 600; padding: 10px 20px; display: block; width: 250px;' href="task2_page2.php">Перейти на страницу 2</a>
</body>
</html>