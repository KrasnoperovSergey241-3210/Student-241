<?php
session_start();

// Записываем время захода, если оно еще не записано
if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time();
    $message = "Вы только что зашли на сайт!";
} else {
    $seconds_ago = time() - $_SESSION['first_visit_time'];
    $message = "С момента вашего захода прошло: $seconds_ago секунд";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Счетчик времени</title>
    <meta charset="UTF-8">
</head>
<body style='background-color: black;'>
    <h1 style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px;'>Время вашего пребывания на сайте</h1>
    <p style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;'><?php echo $message; ?></p>
    <p><a style='background-image: linear-gradient( #75188f,  #410a47); border-radius: 50px; color: white; font-family: sans-serif; text-align: center; margin: 40px auto; text-decoration: none; font-weight: 600; padding: 10px 20px; display: block; width: 250px;' href="<?php echo $_SERVER['PHP_SELF']; ?>">Обновить страницу</a></p>
    <?php if (isset($_SESSION['first_visit_time'])): ?>
        <p style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;'>Вы зашли на сайт в: <?php echo date('H:i:s', $_SESSION['first_visit_time']); ?></p>
    <?php endif; ?>
</body>
</html>