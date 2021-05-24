<?php

namespace exercise_58;
require_once 'File.php';

$fileName = basename($_FILES['file']['name']); # настоящее имя файла (дескрипш)
$destination = __DIR__ . '/spool' . DIRECTORY_SEPARATOR . $fileName;

$tmpFile = $_FILES['file']['tmp_name'];

move_uploaded_file($tmpFile, $destination);

$file = new File($destination);




//if (isset($_POST['replace'])) {
//    $file->setText($_POST['replace']);
//}


//if (isset($_POST['copy'])) {
//    $file->copy($_POST['copy']);
//}


require_once 'index.html';

if (isset($_POST['replace'])) {
    $text = $_POST['replace'];
    echo $text;
    $file->setText($text);
}



