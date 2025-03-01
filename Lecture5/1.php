<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Преобразование текста</title>
</head>
<body>
    <form method="post">
        <textarea name="text" rows="4" cols="50" placeholder="Введите текст"></textarea><br>
        <input type="submit" value="Преобразовать">
    </form>
</body>
</html>
<?php
header('Content-Type: text/html; charset=utf-8');

// Функция для преобразования каждого второго слова в верхний регистр
function transformText(&$words) {
    foreach ($words as $key => &$word) {
        // Преобразуем каждое второе слово (начиная с индекса 1)
        if ($key % 2 == 1) {
            $word = mb_strtoupper($word, 'UTF-8'); // Используем mb_strtoupper для кириллицы
        }
    }
}

// Проверяем, был ли отправлен текст через POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['text'])) {
    $text = $_POST['text'];
    
    // Разбиваем текст на слова
    $words = explode(' ', $text);
    
    // Вызываем функцию, передавая ссылку на массив слов
    transformText($words);
    
    // Собираем слова обратно в строку
    $transformedText = implode(' ', $words);
    
    // Выводим результат
    echo "<h2>Преобразованный текст:</h2>";
    echo "<p>$transformedText</p>";
} else {
    echo "<p>Текст не был введен или отправлен.</p>";
}
?>