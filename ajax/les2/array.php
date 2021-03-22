<?php

$arr = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

$numArray = $_GET['num'];

if (count($arr) < $numArray) {
    echo "ошибка элемент не найден";
} else {
    echo $arr[$numArray];
}