<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework1</title>
    <link rel='stylesheet' href="style.css">
</head>
<body>
    <header>
        <a href='http://localhost/241-student/Homework1/index.php'><img src='mospolytech_logo_white.png' alt='Логотип Мосполитеха.'></a>
        <p class='header-text'>Hello world!</p>
    </header>
    <section class='fade-in'>
        <h1>Welcome to Time & Date!</h1>
        <ul class='main-ul'>
            <li class='inline-block'>
                <p class='bold-style'>
                    Present year:
                </p>
                <p>
                    <?php echo date("Y"); ?>
                </p>
            </li>
            <li class='inline-block'>
                <p class='bold-style'>
                    Present month:
                </p>
                <p>
                    <?php echo date("F"); ?>
                </p>
            </li>
            <li class='inline-block'>
                <p class='bold-style'>
                    Present date:
                </p>
                <p>
                    <?php echo date("jS"); ?>
                </p>
            </li>
            <li class='inline-block'>
                <p class='bold-style'>
                    Day of the week:
                </p>
                <p>
                    <?php echo date("l"); ?>
                </p>
            </li>
            <li class='inline-block'>
                <p class='bold-style'>
                    Current time:
                </p>
                <p>
                    <?php echo date("h:i:s"); ?>
                </p>
            </li>
        </ul>
    </section>
    <footer>
    <a href='http://localhost/241-student/Homework1/index.php'><img class='footer-img' src='mospolytech_logo_white.png' alt='Логотип Мосполитеха.'></a>
        <ul class='footer-ul'>
            <li class='footer-ul-title'>
                Другие продукты:
            </li>
            <li>
                <a href='https://nya-kawaii-senpai.netlify.app/'>Сайт на тему сёрфинга</a>
            </li>
            <li>
                <a href='https://greed-kawaii-senpai.netlify.app'>Сайт с картинами</a>
            </li>
            <li>
                <a href='https://demo-kawaii-senpai.netlify.app'>Сайт для избранных</a>
            </li>
        </ul>
    </footer>
</body>
</html>