<?php
    require dirname(__DIR__).'../header.php';
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Название</th>
      <th scope="col">Текст</th>
      <th scope="col">ID автора</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($articles as $key=>$value):?>
    <tr>
      <th scope="row"><?=$value['id'];?></th>
      <td><a href="<?=dirname($_SERVER['SCRIPT_NAME']).'/article/'.$value['id'];?>"><?=$value['name'];?></a></td>
      <td><?=$value['text'];?></td>
      <td><?=$value['author_id'];?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>