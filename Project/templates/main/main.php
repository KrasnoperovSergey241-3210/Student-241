<?php
    require dirname(__DIR__).'../header.php';
?>
<body style="background-color: black;">
  <table class="table">
    <thead>
      <tr>
        <th style='color: white;' scope="col">ID</th>
        <th style='color: white;' scope="col">Название</th>
        <th style='color: white;' scope="col">Текст</th>
        <th style='color: white;' scope="col">ID автора</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($articles as $key=>$value):?>
      <tr>
        <th style='color: white;' scope="row"><?=$value['id'];?></th>
        <td><a style='color: white;' href="<?=dirname($_SERVER['SCRIPT_NAME']).'/article/'.$value['id'];?>"><?=$value['name'];?></a></td>
        <td style='color: white;'><?=$value['text'];?></td>
        <td style='color: white;'><?=$value['author_id'];?></td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</body>