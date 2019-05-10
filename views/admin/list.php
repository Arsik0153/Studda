<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php foreach ($pageList as $page):?>
    <a href="/admin/list/<?=$page["id"]?>">ID: <?=$page["id"]?>; ParentID: <?=$page["parentId"]?> <br>
  <?php endforeach; ?>
</body>
</html>