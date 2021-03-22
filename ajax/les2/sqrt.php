<?php


if (isset($_GET['num'])) {
    $_GET['num'] = (float)$_GET['num'];
    echo (sqrt($_GET['num']));
} else {
    echo 'Ошибка!!!';
}