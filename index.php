<?php
// единая точка входа

include_once('core/arr.php');

$cname = $_GET['c'] ?? 'index';
// путь для единой точки входа
$path = "controllers/$cname.php";

if (file_exists($path) && checkCname($cname)) {
    include_once($path);
} else {
    $cname = 404;
    include_once('view/errors/v_404.php');
}
    


