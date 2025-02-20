<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Headers Wiki</title>
    <link href='style2.css' rel='stylesheet'>
</head>
<body class='res-body'>
    <?php
    $headers = get_headers('https://ru.wikipedia.org/wiki/HTTP');
    echo "<textarea class='text-area'>";
        print_r($headers);
    echo "</textarea>";
    ?>
</body>
</html>