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
<h3 style='padding-top: 20px; text-align: center;'>Hello, <?= htmlspecialchars($name); ?>!</h5>
<?php require dirname(__DIR__) . '/footer.php'; ?>