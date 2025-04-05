<?php
session_start();

// Инициализируем счетчик, если его нет
if (!isset($_SESSION['page_refresh_count'])) {
    $_SESSION['page_refresh_count'] = 0;
    $message = "Вы еще не обновляли страницу.";
} else {
    // Увеличиваем счетчик при каждом обновлении
    $_SESSION['page_refresh_count']++;
    $message = "Количество обновлений: " . $_SESSION['page_refresh_count'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Счетчик обновлений</title>
    <meta charset="UTF-8">
</head>
<body style='background-color: black;'>
    <h1 style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px;'>Счетчик обновлений страницы</h1>
    <p style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;'><?php echo $message; ?></p>
    <p><a style='background-image: linear-gradient( #75188f,  #410a47); border-radius: 50px; color: white; font-family: sans-serif; text-align: center; margin: 40px auto; text-decoration: none; font-weight: 600; padding: 10px 20px; display: block; width: 250px;' href="<?php echo $_SERVER['PHP_SELF']; ?>">Обновить страницу</a></p>
</body>
</html>