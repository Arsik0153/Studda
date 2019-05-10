<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="post" action="/admin/edit/<?=$page["id"]?>">
    <textarea name="text" style="width: 99%; height: 90vh"><?=$page["text"]?></textarea>
    <button type="submit">Отправить</button>
  </form>
</body>
</html>