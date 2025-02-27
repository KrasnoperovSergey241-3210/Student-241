<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expression = $_POST['expression'];

    // Проверка на допустимые символы
    if (!preg_match('/^[0-9+\-*\/().\s]+$/', $expression)) {
        echo "Ошибка: Недопустимые символы в выражении.";
        exit;
    }

    // Вычисление выражения
    $result = evaluateExpression($expression);

    // Возврат результата
    echo $result;
}

function evaluateExpression($expression) {
    // Удаляем пробелы
    $expression = str_replace(' ', '', $expression);

    // Проверяем баланс скобок
    if (!isBalanced($expression)) {
        return "Ошибка: Неправильное расположение скобок.";
    }

    // Вычисляем выражение
    try {
        $result = calculate($expression);
        return $result;
    } catch (Exception $e) {
        return "Ошибка: " . $e->getMessage();
    }
}

function isBalanced($expression) {
    $balance = 0;
    for ($i = 0; $i < strlen($expression); $i++) {
        if ($expression[$i] === '(') {
            $balance++;
        } elseif ($expression[$i] === ')') {
            $balance--;
        }
        if ($balance < 0) {
            return false;
        }
    }
    return $balance === 0;
}

function calculate($expression) {
    // Рекурсивное вычисление выражений в скобках
    while (preg_match('/\(([^()]+)\)/', $expression, $matches)) {
        $subResult = calculate($matches[1]);
        $expression = str_replace($matches[0], $subResult, $expression);
    }

    // Вычисление умножения и деления
    while (preg_match('/(\d+\.?\d*)([*\/])(\d+\.?\d*)/', $expression, $matches)) {
        $a = $matches[1];
        $op = $matches[2];
        $b = $matches[3];
        $result = ($op === '*') ? $a * $b : $a / $b;
        $expression = str_replace($matches[0], $result, $expression);
    }

    // Вычисление сложения и вычитания
    while (preg_match('/(\d+\.?\d*)([+\-])(\d+\.?\d*)/', $expression, $matches)) {
        $a = $matches[1];
        $op = $matches[2];
        $b = $matches[3];
        $result = ($op === '+') ? $a + $b : $a - $b;
        $expression = str_replace($matches[0], $result, $expression);
    }

    return $expression;
}