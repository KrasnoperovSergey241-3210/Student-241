<?php
session_start();

// Обработка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['country'])) {
    $_SESSION['user_country'] = htmlspecialchars($_POST['country']);
    header('Location: index.php'); // Перенаправляем чтобы избежать повторной отправки формы
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Выбор страны</title>
    <meta charset="UTF-8">
</head>
<body style='background-color: black; display: grid; gap: 60px; justify-content: center;'>
    <h1 style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px;'>Укажите вашу страну</h1>
    
    <?php if (isset($_SESSION['user_country'])): ?>
        <p>Вы выбрали страну: <strong><?php echo $_SESSION['user_country']; ?></strong></p>
        <p><a style='background-image: linear-gradient( #75188f,  #410a47); border-radius: 50px; color: white; font-family: sans-serif; text-align: center; margin: 40px auto; text-decoration: none; font-weight: 600; padding: 10px 20px; display: block; width: 250px;' href="test.php">Перейти на test.php</a></p>
    <?php else: ?>
        <form method="POST" action="" style='display: grid; max-width: 300px; gap: 60px;'>
            <label style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;' for='country'>Выберите страну</label>
            <input style='font-weight: 700; font-size: 20px; font-family: sans-serif; padding: 20px; background-color: black; color: white; border-radius: 50px; border-color: white; border-width: 3px; border-style: solid;' type='text' id='country' name='country'>
            <button style='background-image: linear-gradient( #75188f,  #410a47); border-radius: 50px; color: white; font-family: sans-serif; text-align: center; margin: 40px auto; text-decoration: none; font-weight: 600; padding: 10px 20px; display: block; width: 250px;' type="submit">Сохранить</button>
        </form>
    <?php endif; ?>
</body>
</html>