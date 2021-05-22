<?php
namespace exercise_58;
require_once 'File.php';

$tmpFile = $_FILES['file']['tmp_name'];
$name = $_FILES['file']['name'];
$path = __DIR__ . "/spool/$name";
move_uploaded_file($tmpFile, $path);

$file = new File($path);


if ($_POST['textarea']) {
    $file->setText($_POST['textarea']);
}


require_once 'index.html';
?>




