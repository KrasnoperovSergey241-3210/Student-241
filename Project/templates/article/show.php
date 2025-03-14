<?php
$title = $article['name'];
require dirname(__DIR__) . '/header.php';
?>

<div class="card" style="margin-top: 30px; padding: 10px; aspect-ratio: 1/1; border-radius: 50px; justify-self: center; max-width: 350px;">
  <div class="card-body">
    <h5 style='padding-bottom: 20px; text-align: center;' class="card-title"><?=$article['name'];?></h5>
    <h6 style='padding-bottom: 20px; text-align: center;' class="card-subtitle mb-2 text-muted"><?=$article['author_id'];?></h6>
    <p style='text-align: justify;' class="card-text"><?=$article['text'];?></p>
    <div style='display: flex; justify-content: center; margin-top: 35px;'>
    <a href="http://demo-kawaii-senpai.netlify.app" style='text-decoration: none; ' class="card-link">Стать избранным</a>
  </div>
</div>
<?php require dirname(__DIR__).'/footer.php';?>