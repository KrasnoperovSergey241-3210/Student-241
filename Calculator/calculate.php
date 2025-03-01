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


    // function calculate($expression) {
    //     $expression = str_replace(' ', '', $expression);
    //     return eval("return $expression;");
    // }

    function calculate($expression) {
        $expression = str_replace(' ', '', $expression);
        $output = [];
        $operators = [];
        $precedence = ['+' => 1, '-' => 1, '*' => 2, '/' => 2];
        $length = strlen($expression);
        $number = '';
        for ($i = 0; $i < $length; $i++) {
            $char = $expression[$i];
            if (is_numeric($char) || $char == '.') {
                $number .= $char;
            } else {
                if ($number !== '') {
                    $output[] = $number;
                    $number = '';
                }
                if ($char == '-' && ($i == 0 || $expression[$i - 1] == '(')) {
                    $number .= $char;
                } elseif ($char == '(') {
                    $operators[] = $char;
                } elseif ($char == ')') {
                    while (end($operators) != '(') {
                        $output[] = array_pop($operators);
                    }
                    array_pop($operators);
                } else {
                    while (!empty($operators) && end($operators) != '(' && $precedence[$char] <= $precedence[end($operators)]) {
                        $output[] = array_pop($operators);
                    }
                    $operators[] = $char;
                }
            }
        }
        if ($number !== '') {
            $output[] = $number;
        }
        while (!empty($operators)) {
            $output[] = array_pop($operators);
        }
        $stack = [];
        foreach ($output as $token) {
            if (is_numeric($token)) {
                array_push($stack, $token);
            } else {
                $b = array_pop($stack);
                $a = array_pop($stack);
                switch ($token) {
                    case '+':
                        array_push($stack, $a + $b);
                        break;
                    case '-':
                        array_push($stack, $a - $b);
                        break;
                    case '*':
                        array_push($stack, $a * $b);
                        break;
                    case '/':
                        array_push($stack, $a / $b);
                        break;
                }
            }
        }
    
        return array_pop($stack);
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