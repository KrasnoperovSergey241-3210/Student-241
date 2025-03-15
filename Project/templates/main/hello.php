<?php
$present_uri = $_SERVER['REQUEST_URI'];
$title = "Мой блог";
if (strpos($present_uri, '/hello/') !== false) {
    $title = "Страница приветствия";
    require dirname(__DIR__) . '/main/header2.php';
} else {
    require dirname(__DIR__) . '/header.php';
}
?>
<body style='background-color: black;'>
    <h3 style='padding-top: 20px; text-align: center; color: white;'>Hello, <?= htmlspecialchars($name); ?>!</h5>
</body>
<?php require dirname(__DIR__) . '/footer.php'; ?>