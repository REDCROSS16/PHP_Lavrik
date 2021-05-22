<?php
namespace exercise_58;
require_once 'File.php';


//print_r($_FILES);
$file = new File($_FILES['userfile']['tmp_name']);
//echo '<hr>';
//echo 'extenstion of upload file : ' . $file->getExt();
//echo '<hr>';
//echo 'path of uploaded file : ' . $file->getPath();
//echo '<hr>';
//echo 'dir of uploaded file : ' . $file->getDir();
//echo '<hr>';
//echo $file->getName();
//echo '<hr>';
//echo $file->getSize();
//echo '<hr>';
//echo  $file->getText();
//echo '<hr>';
//$file->setText('123123123123123');



//$text = $file->getText();
//$file->setText('123');

$file->setText( $_POST['textarea']);
$file->copy('123');
?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<title>Испытание класса File</title>
</head>
<body>

    <h2>загрузите файл</h2>
    <form enctype="multipart/form-data" method="POST">
        <input type="file" name="userfile">
        <input type="submit" value="отправить файл">
    </form>

    <hr>
    <form method="post">
        <p>Добавить текст в файл: </p>
        <textarea name="textarea" style="min-width: 500px; min-height: 500px"></textarea>
        <input type="submit" value="добавить в файл">
    </form>


</body>
</html>




