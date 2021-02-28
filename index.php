<?php
/**  единая точка входа */

// подключием инит конфиг + константы
include_once('init.php');

$cname = $_GET['c'] ?? 'index';
// путь для единой точки входа
$path = "controllers/$cname.php";
$title = 'Ошибка 404';
$content = '';

if (file_exists($path) && checkControllerName($cname)) {
    include_once($path);
} else {
    $content = template('errors/v_404');
}

$html = template('base/v_main', [
    'title' => $pageTitle,
    'content' => $pageContent,
]);


echo $html;