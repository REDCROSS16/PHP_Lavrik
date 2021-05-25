<?php

namespace exercise_58;
require_once 'File.php';

$fileName = basename($_FILES['file']['name']); # настоящее имя файла (дескрипш)
$destination = __DIR__ . '/spool' . DIRECTORY_SEPARATOR . $fileName;

$tmpFile = $_FILES['file']['tmp_name'];

move_uploaded_file($tmpFile, $destination);

$file = new File($destination);
echo $_POST['replace'];


//if (isset($_POST['replace'])) {
//    $file->setText($_POST['replace']);
//}


//if (isset($_POST['copy'])) {
//    $file->copy($_POST['copy']);
//}
//if (isset($_GET['replace'])) {
//    $text = $_GET['replace'];
//    echo $text;
////    $file->setText($text);
//}

require_once 'index.html';






