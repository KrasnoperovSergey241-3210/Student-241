<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expression = $_POST['expression'];

    // Проверка на допустимые символы
    if (!preg_match('/^[0-9+\-*\/() ]+$/', $expression)) {
        echo "Ошибка: Недопустимые символы в выражении.";
        exit;
    }

    if (strpos($expression, '/0') !== false) {
        echo "Ошибка: на ноль делить нельзя.";
        exit;
    }

    if (preg_match('/^[()+\-\/*\s]+$/', $expression)) {
        echo "Ошибка: введите числа для расчёта.";
        exit;
    }

    if (preg_match('/\)[0-9]/', $expression)) {
        echo "Ошибка: Недопустимые символы в выражении.";
        exit;
    }

    if (preg_match('/[0-9]\(/', $expression)) {
        echo "Ошибка: Недопустимые символы в выражении.";
        exit;
    }

    if (preg_match('/^(\D\d|\d\D)$/', $expression)) {
        echo "Ошибка: Недопустимые символы в выражении.";
        exit;
    }

    if (preg_match('/[+\-*\/]{2}/', $expression)) {
        echo "Ошибка: строка содержит два знака подряд.";
        exit;
    }

    // Вычисление выражения
    function calculate($expression) {
        // Удаляем все пробелы
        $expression = str_replace(' ', '', $expression);

        // Рекурсивно вычисляем выражение
        return eval("return $expression;");
    }

    try {
        $result = calculate($expression);
        echo $result;
    } catch (Exception $e) {
        echo "Ошибка: Невозможно вычислить выражение.";
    }
} else {
    echo "Ошибка: Неверный метод запроса.";
}
?>