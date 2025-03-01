<?php
// Задаем переменные с именами правителей
$правители = [
    'XVI' => 'Иван Васильевич',
    'XVIII' => 'Пётр Алексеевич',
    'XIX' => 'Николай Павлович'
];

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем введенный век
    $век = $_POST['век'] ?? '';

    // Проверяем, есть ли такой век в массиве
    if (array_key_exists($век, $правители)) {
        $результат = "В $век веке царствовал " . $правители[$век];
    } else {
        $результат = "Информация о правителе для этого века отсутствует.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Правители России</title>
</head>
<body>
    <form method="POST">
        <label for="век">Введите век римскими цифрами:</label><br>
        <input type="text" id="век" name="век" required><br>
        <button type="submit">Узнать</button>
    </form>

    <?php if (isset($результат)): ?>
        <h2>Результат:</h2>
        <p><?php echo $результат; ?></p>
    <?php endif; ?>
</body>
</html>