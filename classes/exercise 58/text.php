<?php

namespace exercise_58;
require_once 'File.php';

# настоящее имя файла (дескрипш)
$fileName = basename($_FILES['file']['name']);
$destination = __DIR__ .  DIRECTORY_SEPARATOR .'spool' . DIRECTORY_SEPARATOR . $fileName;

$tmpFile = $_FILES['file']['tmp_name'];

move_uploaded_file($tmpFile, $destination);
$file = new File($destination);

//    file_put_contents($destination, 123);

