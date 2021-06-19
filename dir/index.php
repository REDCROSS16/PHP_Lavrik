<?php


//echo file_get_contents('test.txt');
//echo '<br>';
//echo $_SERVER['DOCUMENT_ROOT'];
//echo '<br>';
//echo __FILE__; # путь к файлу
//echo '<br>';
//echo  __DIR__; # путь к папке

//file_put_contents('test.txt', '12345');
//file_put_contents('new.txt','');
//
//$arr = ['1.txt', '2.txt', '3.txt'];
//
//foreach ($arr as $item) {
//    file_put_contents($item,'');
//}


//Пусть в корне вашего сайта лежит файл test.txt, в котором записан текст '12345'.
// Откройте этот файл, запишите в конец текста восклицательный знак и сохраните новый текст обратно в файл.

//file_put_contents('test.txt', '!');
//echo file_get_contents('test.txt');

//Пусть в корне вашего сайта лежит файл test.txt, в котором записано некоторое число.
//Откройте этот файл, возведите число в квадрат и запишите обратно в файл.
//$num = file_get_contents('test.txt');
//$num *= $num;
//file_put_contents('test.txt', $num);
//echo file_get_contents('test.txt');

//Пусть в корне вашего сайта лежит файл count.txt. Изначально в нем записано число 0.
//Сделайте так, чтобы при обновлении страницы наш скрипт каждый раз увеличивал
//это число на 1. То есть у нас получится счетчик обновления страницы в виде файла.
//$count = file_get_contents('count.txt');
//file_put_contents('count.txt', ++$count );
//echo file_get_contents('count.txt');

//Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив с именами этих файлов.
//Переберите его циклом, прочитайте содержимое каждого из файлов,
//слейте его в одну строку и запишите в новый файл new.txt. Изначально этого файла не должно быть.
$arr = ['1.txt', '2.txt', '3.txt'];
$result = '';
foreach ($arr as $file) {
    $result .= file_get_contents($file);
}

echo $result;