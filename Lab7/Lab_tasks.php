<?php
    // # 1

    // Начинаем сессию
    session_start();
    
    // Проверяем, был ли уже записан текст в сессию
    if (!isset($_SESSION['test_text'])) {
        // Если нет - записываем текст 'test' в сессию
        $_SESSION['test_text'] = 'test';
        echo "Текст 'test' был записан в сессию. Обновите страницу, чтобы увидеть его.";
    } else {
        // Если текст уже есть в сессии - выводим его
        echo "Содержимое сессии: " . $_SESSION['test_text'];
    }

    echo '<br>';

    // # 2

    // См. task2_page1.php и task2_page2.php

    // # 3

    // См. task3.php

    // # 4

    // См. index.php и test.php

    // # 5

    // См. task5.php

    // # 6

    // См. email_form.php и user_form.php

    // # 7

    // Устанавливаем куку, если она ещё не установлена
    if (!isset($_COOKIE['test'])) {
        setcookie('test', '123', time() + 3600, '/'); // Кука действует 1 час
        echo "Кука 'test' установлена со значением '123'. Обновите страницу.";
    } else {
        echo "Содержимое куки 'test': " . htmlspecialchars($_COOKIE['test']);
    }
?>
<body style='font-weight: 700; font-size: 20px; font-family: sans-serif; padding: 40px; background-color: black; color: white; border-radius: 50px; border-color: white; border-width: 3px; border-style: solid;'>
</body>