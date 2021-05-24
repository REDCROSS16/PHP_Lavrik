<?php
namespace exercise_58;
require_once 'File.php';

$tmpFile = $_FILES['file']['tmp_name'];
$name = $_FILES['file']['name'];
$path = __DIR__ . DIRECTORY_SEPARATOR .'spool' . DIRECTORY_SEPARATOR . $name;
echo $path;

move_uploaded_file($tmpFile, $path);

$file = new File($path);


//echo $_POST['textarea'];
if (isset($_POST['textarea'])) {
    $file->setText($_POST['textarea']);
}

require_once 'index.html';
?>




