<?php
$uri_tek = $_SERVER['REQUEST_URI'];
$title = "Мой блог";
if (strpos($uri_tek, '/hello/') !== false) {
    $title = "Страница приветствия";
    require dirname(__DIR__) . '/main/new_header.php';
} else {
    require dirname(__DIR__) . '/header.php';
}
?>
<body style='background-color: black; outline: none;'>
    <h2 style='color: white; text-align: center; margin-top: 40px;'>Hello, <?= htmlspecialchars($name); ?>!</h5>
</body>
<?php require dirname(__DIR__) . '/footer.php'; ?>