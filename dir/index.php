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
//$result = array_sum(file('test.txt'));
//file_put_contents('test.txt', $result. PHP_EOL, FILE_APPEND);
//echo file_get_contents('test.txt');


//Создайте в корне вашего сайта папку с названием dir.
//mkdir('dir3');

//Дан массив со строками. Создайте в корне вашего сайта папки, названиями которых служат элементы этого массива
//$arr = ['первая', 'вторая', 'третья'];
//foreach ($arr as $dir) {
//    mkdir($dir);
//}

//Создайте в корне вашего сайта папку с названием test. Затем создайте в этой папке 3 файла: 1.txt, 2.txt, 3.txt.
//mkdir('test');
//$files = ['1.txt', '2.txt', '3.txt'];
//foreach ($files as $file) {
//    file_put_contents('test/' . $file, '');
//}

//Удалите папку с названием dir.

//$scanDir = scandir('dir');
//print_r($scanDir);
//
//foreach ($scanDir as $file ) {
//    if (is_file('dir/' . $file)) {
//        unlink('dir/' . $file);
//    }
//}
//rmdir('dir');

//Пусть в корне вашего сайта лежит папка old. Переименуйте ее на new.
//rename('old', 'new');

//Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы. Выведите на экран столбец имен этих файлов.
//$arr = scandir('test');
//foreach ($arr as $file) {
//    echo $file . "<br>";
//}

// 38. Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы.
//Переберите эти файлы циклом, откройте каждый из них и запишите в конец восклицательный знак.
//$arr = scandir('test');
//
//foreach ( $arr as $file ) {
//    if ($file == '.' || $file =='..') {
//        continue;
//    } else {
//        file_put_contents('test/' . $file, '!', FILE_APPEND);
//    }
//}


// 39. Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые
//файлы. Переберите эти файлы циклом и выведите их тексты в браузер.
//$dir = scandir('test');
//foreach ($dir as $file) {
//    if ($file == '.' || $file =='..') {
//        continue;
//    } else {
//        echo file_get_contents('test/' . $file) . '<br>';
//    }
//}


//Пусть дан путь к файлу. Проверьте, файл это или папка.
//var_dump( 'test file: ', is_file('test'));
//var_dump('count.txt file: ', is_file('count.txt'));

//Пусть в корне вашего сайта лежит папка dir, а в ней какие-то
//файлы и подпапки. Выведите на экран столбец имен подпапок из папки dir.
//$dir = scandir('test');
//foreach ( $dir as $file) {
//    if (is_file('test/' . $file)) echo $file;
//}

//Пусть в корне вашего сайта лежит папка dir, а в ней какие-то файлы и подпапки.
//Выведите на экран столбец имен файлов из папки dir.
//$dir = scandir('test');
//foreach ( $dir as $file) {
//    if (is_file('test/' . $file)) echo $file;
//}

//41 Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы и подпапки.
//В подпапках в свою очередь также могут быть текстовые файлы и подпапки. Рекурсивно пройдитесь
//по всем вложенным папкам и выведите в браузер пути ко всем текстовым файлам.

//function getFiles ($path) {
//    $result = [];
//    $dir = array_diff(scandir($path), ['.', '..']);
//
//    foreach ( $dir as $file) {
//        $fullPath = $path . '/' . $file;
//
//        if (is_dir($fullPath)) {
//            $result = array_merge($result, getFiles($fullPath));
//        } else {
//            $result[] = $fullPath;
//        }
//    }
//    return $result;
//}
//echo '<pre>';
//print_r(getFiles('test'));
//echo '</pre>';

//42 Пусть в корне вашего сайта лежит папка dir с текстовыми файлами и подпапками.
//Рекурсивно пройдитесь по всем вложенным папкам и в конец каждого текстового файла
//запишите восклицательный знак.
//$files = getFiles('test');
//foreach ($files as $file) {
//    file_put_contents($file, '1000', FILE_APPEND);
//}


//Пусть в корне вашего сайта лежит папка dir с текстовыми файлами
//и подпапками. Удалите папку dir вместе с ее содержимым.
//function removeDir ($dir) {
//    $files = array_diff(scandir($dir), ['.', '..']);
//    foreach ($files as $file) {
//        $path = $dir . '/' . $file;
//        if (is_dir($path)) {
//            removeDir($path);
//        } else {
//            unlink($path);
//        }
//    }
//    rmdir($dir);
//}
//
//removeDir('dir2');