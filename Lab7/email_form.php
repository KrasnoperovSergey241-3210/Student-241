<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $_SESSION['user_email'] = htmlspecialchars($_POST['email']);
    header('Location: user_form.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Введите ваш email</title>
</head>
<body style='background-color: black; justify-content: center; display: grid;'>
    <h1 style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px;'>Шаг 1 из 2: Введите email</h1>
    <form style='display: grid; gap: 40px; width: 300px; justify-content: center;' method="POST">
        <label style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;' for='email'>Email:</label>
        <input style='font-weight: 700; font-size: 20px; font-family: sans-serif; padding: 20px; background-color: black; color: white; border-radius: 50px; border-color: white; border-width: 3px; border-style: solid;' id='email' type="email" name="email" required>
        <button style='background-image: linear-gradient( #75188f,  #410a47); border-radius: 50px; color: white; font-family: sans-serif; text-align: center; margin: 40px auto; text-decoration: none; font-weight: 600; padding: 10px 20px; display: block; width: 250px;' type="submit">Продолжить</button>
    </form>
</body>
</html>