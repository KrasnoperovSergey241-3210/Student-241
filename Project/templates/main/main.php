<?php
    require dirname(__DIR__).'../header.php';
?>
<body style='background-color: black; font-size: 120%;'>
  <table class="table">
    <thead>
      <tr>
        <th style='color: white; padding-top: 20px; padding-bottom: 20px;' scope="col">Id</th>
        <th style='color: white; padding-top: 20px; padding-bottom: 20px;' scope="col">Title</th>
        <th style='color: white; padding-top: 20px; padding-bottom: 20px;' scope="col">Text</th>
        <th style='color: white; padding-top: 20px; padding-bottom: 20px;' scope="col">Author</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($articles as $article):?>
      <tr>
        <th style='color: white; padding-top: 20px; padding-bottom: 20px;' scope="row"><?=$article->getId();?></th>
        <td style='padding-top: 20px; padding-bottom: 20px;'><a style='color: white; text-decoration: none; padding-top: 20px; padding-bottom: 20px;' href="<?=dirname($_SERVER['SCRIPT_NAME']).'/article/'.$article->getId();?>"><?=$article->getName();?></a></td>
        <td style='color: white; padding-top: 20px; padding-bottom: 20px;'><?=$article->getText();?></td>
        <td style='color: white; padding-top: 20px; padding-bottom: 20px;'><?=$article->getAuthorId();?></td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</body>