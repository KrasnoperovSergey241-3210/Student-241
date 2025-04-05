<?php
session_start(); // Сессия должна быть запущена
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
} else {
    $message = 'В сессии нет данных!';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Страница 2</title>
</head>
<body style='background-color: black;'>
    <h1 style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px;'>Данные из сессии:</h1>
    <p style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;'><?php echo $message; ?></p>
    <a style='background-image: linear-gradient( #75188f,  #410a47); border-radius: 50px; color: white; font-family: sans-serif; text-align: center; margin: 40px auto; text-decoration: none; font-weight: 600; padding: 10px 20px; display: block; width: 250px;' href="task2_page1.php">Вернуться на страницу 1</a>
</body>
</html>