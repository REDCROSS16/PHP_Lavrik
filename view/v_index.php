<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт на PHP</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>
<h1> CHAT </h1>
<a href='index.php?c=add'>Добавить сообщение</a>
<a href='index.php?view=table'>Отобразить как таблицу</a>
    <br>
<div>
    <? foreach ($messages as $message): ?>
        <div>
            <strong><?=$message['name'];?></strong>
            <em><?=$message['data'];?></em>
            <div><?=$message['text'];?></div>
            <a href="index.php?c=message&id=<?=$message['id_message'];?>">Читать далее</a>
            <hr>
        </div>
    <? endforeach;?>
</div>