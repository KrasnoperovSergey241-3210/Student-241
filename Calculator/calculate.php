<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем выражение из POST-запроса
    $expression = $_POST['expression'];

    // Проверяем выражение на допустимые символы
    if (preg_match('/^[0-9+\-*\/()\.\s]+$/', $expression)) {
        // Вычисляем результат
        try {
            eval('$result = ' . $expression . ';');
            echo $result;
        } catch (Throwable $e) {
            echo "Ошибка: Некорректное выражение";
        }
    } else {
        echo "Ошибка: Недопустимые символы в выражении";
    }
} else {
    echo "Ошибка: Неверный метод запроса";
}
?>