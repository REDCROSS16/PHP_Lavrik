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
//$arr = ['1.txt', '2.txt', '3.txt'];
//$result = '';
//foreach ($arr as $file) {
//    $result .= file_get_contents($file);
//}
//
//echo $result;

//Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt.
//Вручную сделайте массив с именами этих файлов. Переберите его циклом и в
//текст каждого файла в конец запишите восклицательный знак.
//$arr = ['1.txt', '2.txt', '3.txt'];
//foreach ($arr as $file) {
//    file_put_contents($file, '!', FILE_APPEND);
//    echo file_get_contents($file);
//}

//Пусть в корне вашего сайта лежит файл old.txt. Переименуйте его на new.txt.
//rename('old.txt', 'new.txt');

//Пусть в корне вашего сайта лежит файл test.txt.
//Пусть также в корне вашего сайта лежит папка dir. Переместите файл в эту папку.
//rename('test.txt', 'dir/test.txt');

//Пусть в корне вашего сайта лежит папка dir1, а в ней файл test.txt.
//Пусть также в корне вашего сайта лежит папка dir2. Переместите файл в эту папку.
//rename('dir1/test.txt', 'dir2/test.txt');


//Пусть в корне вашего сайта лежит файл test.txt. Скопируйте его в файл copy.txt.
//copy('test.txt', 'copy.txt');

//Пусть в корне вашего сайта лежит файл test.txt. Пусть также в корне вашего
//сайта лежит папка dir. Скопируйте файл test.txt в папку dir. Копию файла также назовите test.txt.
//copy('test.txt',  'dir/test.txt');

//Пусть в корне вашего сайта лежит файл test.txt. Удалите его.
//unlink('test.txt');

//Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt.
//Вручную сделайте массив с именами этих файлов. Переберите его циклом и удалите все эти файлы.
//$arr = ['1.txt', '2.txt', '3.txt'];
//foreach ($arr as $file) {
//    unlink($file);
//}

//Проверьте, лежит ли в корне вашего сайта файл test.txt.
//var_dump( file_exists('test.txt'));

//Проверьте, лежит ли в корне вашего сайта файл test.txt. Если да - удалите его, если нет - создайте.
//$file = 'test.txt';
//if (file_exists($file)) {
//    unlink($file);
//} else {
//    file_put_contents($file, '');
//}


//Дан массив с именами файлов ['1.txt', '2.txt', '3.txt'].
//Переберите его циклом и проверьте каждый файл на существование.
//Выведите на экран имя каждого файла и рядом текст "существует" или "не существует".
//$arr = ['1.txt', '2.txt', '3.txt'];
//foreach ($arr as $file) {
//    echo $file . var_dump(file_exists($file)) . '<br>';
//}

//Пусть в корне вашего сайта лежит файл test.txt. Узнайте его размер, выведите на экран.
//if (file_exists('test.txt')) {
//    echo filesize('test.txt');
//}

//Модифицируйте предыдущую задачу так, чтобы размер файла выводился в килобайтах.
//if (file_exists('test.txt')) {
//    echo filesize('test.txt') / 1024;
//}

//Положите в корень вашего сайта какую-нибудь картинку размером более мегабайта.
//Узнайте размер этого файла и переведите его в мегабайты.
//if (file_exists('test.txt')) {
//    echo filesize('test.txt') / (1024 * 1024);
//}

//Положите в корень вашего сайта какой-нибудь фильм размером более гигабайта.
//Узнайте размер этого файла и переведите его в гигабайты.

//Дан файл test.txt. Прочитайте его текст, получите массив его строк.
//$content = file_get_contents('test.txt');
//$text = explode(PHP_EOL, $content);
//echo '<pre>';
//print_r ($text);
//echo '</pre>';


//Дан файл test.txt. В нем на каждой строке написано какое-то число. Найдите сумму этих чисел и запишите ее в файл sum.txt.
//$file = file_get_contents('test.txt');
//$number = explode(PHP_EOL, $file);
//echo array_sum($number);

//Дан массив. Запишите элементы этого массива в файл test.txt так, чтобы каждый элемент начинался с новой строки.
//$arr = [1,2,3,4,5,6];
//foreach ($arr as $item) {
//    file_put_contents('test.txt', $item . PHP_EOL, FILE_APPEND);
//}
//echo file_get_contents('test.txt');

//Дан файл test.txt. В нем на каждой строке написано какое-то число.
//С помощью функции file найдите сумму этих чисел и выведете ее на экран.
//echo array_sum(file('test.txt'));

//Дан файл test.txt. В нем на каждой строке написано какое-то число.
// С помощью функции file найдите сумму этих чисел и запишите эту сумму обратно в конец файла, с новой строки.
$result = array_sum(file('test.txt'));
file_put_contents('test.txt', $result. PHP_EOL, FILE_APPEND);
echo file_get_contents('test.txt');