<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header('Location: email_form.php');
    exit;
}

// Обработка отправки второй формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Здесь можно обработать данные формы
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
</head>
<body style='background-color: black; justify-content: center; display: grid;'>
    <h1 style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px;'>Шаг 2 из 2: Заполните данные</h1>
    <form style='display: grid; gap: 40px; width: 300px; justify-content: center;' method="POST">
        <label style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;' for='first_name'>Имя:</label>
        <input  style='font-weight: 700; font-size: 20px; font-family: sans-serif; padding: 20px; background-color: black; color: white; border-radius: 50px; border-color: white; border-width: 3px; border-style: solid;' id='first_name' type="text" name="first_name" required><br><br>
        <label style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;' for='name'>Фамилия:</label>
        <input  style='font-weight: 700; font-size: 20px; font-family: sans-serif; padding: 20px; background-color: black; color: white; border-radius: 50px; border-color: white; border-width: 3px; border-style: solid;' id='name' type="text" name="last_name" required><br><br>
        <label style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;' for='password'>Пароль:</label>
        <input  style='font-weight: 700; font-size: 20px; font-family: sans-serif; padding: 20px; background-color: black; color: white; border-radius: 50px; border-color: white; border-width: 3px; border-style: solid;' id='password' type="password" name="password" required><br><br>
        <label style='text-align: center; color: white; font-family: sans-serif; margin-top: 40px; font-weight: 600;' for='email'>Email:</label>
        <input  style='font-weight: 700; font-size: 20px; font-family: sans-serif; padding: 20px; background-color: black; color: white; border-radius: 50px; border-color: white; border-width: 3px; border-style: solid;' id='email' type="email" name="email" value="<?php echo $_SESSION['user_email']; ?>" readonly><br><br>
        <button style='background-image: linear-gradient( #75188f,  #410a47); border-radius: 50px; color: white; font-family: sans-serif; text-align: center; margin: 40px auto; text-decoration: none; font-weight: 600; padding: 10px 20px; display: block; width: 250px;' type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>