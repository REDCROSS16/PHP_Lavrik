<?php

namespace exercise_58;
require_once 'File.php';

# настоящее имя файла (дескрипш)
$fileName = basename($_FILES['file']['name']);
$destination = __DIR__ . '/spool' . DIRECTORY_SEPARATOR . $fileName;

$tmpFile = $_FILES['file']['tmp_name'];

move_uploaded_file($tmpFile, $destination);

$file = new File($destination);

if (isset($_GET['replace'])) {
    $text = $_GET['replace'];
    $file->setText($text);
}
