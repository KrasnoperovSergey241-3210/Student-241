<?php
$title = $article->getName();
require dirname(__DIR__) . '/header.php';
?>
<body style='background-color: black;'>
  <div class="card" style='background-color: black; border-style: solid; border-width: 3px; border-color: white; border-radius: 50px; padding: 40px; width: 500px; aspect-ratio: 1/1; display: flex; flex-direction: column; justify-self: center;'>
    <h3 style='color: white; text-align: center; margin-bottom: 30px;' class="card-title"><?=$article->getName();?></h5>
    <h4 style='color: white !important; text-align: center; margin-bottom: 70px !important;' class="card-subtitle mb-2 text-muted">Автор: <?=$author->getNickname();?></h6>
    <p style='color: white; text-align: justify; line-height: 180%; font-size: 20px; margin-bottom: 40px;' class="card-text"><?=$article->getText();?></p>
    <div style='display: flex; justify-content: center;'>
      <a href="http://demo-kawaii-senpai.netlify.app" class="card-link" style='color: white; text-decoration: none; font-size: 20px; font-weight: bold; letter-spacing: 0.5px;'>Стать избранным</a>
    </div>
  </div>
</body>
<?php require dirname(__DIR__).'/footer.php';?>