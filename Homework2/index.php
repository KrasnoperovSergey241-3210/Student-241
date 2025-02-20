<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 2</title>
    <link href='style2.css' rel='stylesheet'>
</head>
<body>
    <header>
        <a href='http://localhost/241-student/Homework1/index.php'><img src='mospolytech_logo_white.png' alt='Логотип Мосполитеха.'></a>
        <p class='header-text'>Homework 2</p>
    </header>
    <main>
        <section class='fade-in'>
            <h1>Узнай свое имя на языке миньонов!</h1>
            <form class='form-grid' action="https://httpbin.org/post"  method="post">
                <fieldset class='fieldset'>
                    <legend>Заполни форму</legend>
                    <label for='surname'>Фамилия</label>
                    <input type='text' name='surname' id='surname' pattern="^[АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя]+$" title="Введите русские буквы" placeholder='Аргайл' required>
                    <label for='name'>Имя</label>
                    <input type='text' name='name' id='name' pattern="^[АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя]+$" title="Введите русские буквы" placeholder='Феликс' required>
                    <label for='patronymic'>Отчество</label>
                    <input type='text' name='patronymic' id='patronymic' pattern="^[АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя]+$" title="Введите русские буквы" placeholder='Астольфович' required>
                    <label for='card-number'>Номер карты</label>
                    <input type='number' name='card-number' id='card-number' min='1000000000000000' max='9999999999999999' placeholder='1111111111111111' required>
                    <label for='password'>Пароль</label>
                    <input type='password' name='password' id='password' minlength='5' maxlength='30' required placeholder='123456'>
                    <label for='CVV'>CVV-код</label>
                    <input type='number' name='CVV' id='CVV' min='100' max='999' required placeholder='123'>
                    <label for='phone-number'>Номер телефона</label>
                    <input type="tel" name='phone-number' id='phone-number' required placeholder='8 (696) 969 69 69'>
                    <label for='CVV'>Email</label>
                    <input type='email' name='email' id='email' required placeholder="felixargyle@mail.ru">
                    <button type='submit'>Узнать имя</button>
                    <a class='form-next-link' href='res.php'>Перейти к следующей странице</a>
                </fieldset>
            </form>
        </section>
    </main>
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