<?php
session_start();

if (!isset($_SESSION['user_country'])) {
    header('Location: index.php'); // Перенаправляем если страна не выбрана
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Просмотр страны</title>
    <meta charset="UTF-8">
</head>
<body style='background-color: black;'>
    <h1 style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px;'>Ваша страна</h1>
    <p style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;'>Вы указали страну: <strong><?php echo $_SESSION['user_country']; ?></strong></p>
    <p><a  style='background-image: linear-gradient( #75188f,  #410a47); border-radius: 50px; color: white; font-family: sans-serif; text-align: center; margin: 40px auto; text-decoration: none; font-weight: 600; padding: 10px 20px; display: block; width: 250px;' href="index.php">Вернуться назад</a></p>
</body>
</html>