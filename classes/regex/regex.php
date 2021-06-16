<?php

echo 'REGEX lessons';
echo '<br>';

$str = 'AbAbBBaAAAa';

$res ='';
echo preg_replace('#a#i', '!', $str);
//# - Эти решетки называются ограничителями регулярных выражений
//i - заставит игнорировать регистр символов
//. - точка является специальным символом и обозначает 'любой символ'
//Итак, запомните: буквы и цифры обозначают сами себя, а точка заменяет любой символ.
//s - символ перевода строки


echo '<br>';
$str2 = 'xex xox xax';
echo preg_replace('#x.x#', '!!!', $str2);

// операторы (квантификаторы) повторения
// плюс '+' (один и более раз),
// звездочка '*' (ноль и более раз)
// вопрос '?' (ноль или один раз, иначе говоря - может быть, а может не быть)

$str3 = 'xx xax xaax xaaax xbx';
echo '<br>' . $str3 . '<br>';
echo preg_replace('#xa+x#','+', $str3);

//Для этого существуют группирующие скобки '(' и ')':

$str4 = 'xabx xababx xaabbx';
echo '<br>';
echo $str4;
echo '<br>';
echo preg_replace('#x(ab)+x#', '*', $str4);

$str5 = 'a+x ax aax aaax';
echo '<br>';
echo $str5;
echo '<br>';

// \ - экранирует спецсимволы!!! \+ \-
echo preg_replace('#a\+x#', '!', $str5); # экранирован +
echo preg_replace('(a\+x)', '!', $str5); # экранирован +

$url = 'href="www.vk.com"';

echo preg_replace('#a&b#', '!', 'a&b');

//Являются спецсимволами: $ ^ . * + ? \ {} [] () |
//
//Не являются спецсимволами: @ : , ' '' ; - _ = < > % # ~ `& ! /
//
//Кроме того: спецсимволами будут выбранные ограничители.


//\d - цифра от 0 до 9 \D - не цифра

$str6 = '123D122 123 123';
echo '<br>';
echo preg_replace('#\d+#', '!', $str6);

// \s - Обозначает пробел или пробельный символ (имеется ввиду перевод строки, табуляция и т.п.)
// \S - не пробел
//\w - цифра или буква
//\W - не цифра не буква

// '[' и ']', которые представляют собой операцию 'или'

//или axx или bxx или cxx
echo preg_replace('#[abc]xx#', '!', 'axx bxx cxx exx');

//С помощью шляпки '^' мы можем сделать отрицание: [^abc] !!!!!!!!!
//[a-z] -  группа символов маленькие а-z [A-Z] большие A-Z

echo preg_replace('#[^d]xx#', '!', 'axx bxx ^xx dxx'); # НЕ ЦИФРА ХХ

echo '<hr>';
echo preg_replace('#[.a]+xx#', '!', '.xx ..xx .a.xx bxx');

echo 'reg_lesson_3';

//^ - начало строки $ - конец строки
echo preg_replace('#^aaa#', '!', 'aaa aaa aaa'); //выведет '! aaa aaa'
echo preg_replace('#aaa$#', '!', 'aaa aaa aaa'); //выведет 'aaa aaa !'


echo preg_replace('#^a+$#', '!', 'aaa'); //выведет '!'
//Шаблон поиска такой: буква 'a' повторяется один или более раз, заменить всю строку на '!' только она состоит из одних букв 'a'.

//Обратите внимание на этот прием: когда в начале регулярки стоит '^', а в конце - '$'.
// Таким образом мы проверяем всю строку целиком на соответствие регулярке.


//Квадратные скобки не единственный вариант сделать 'или': существует еще вариант через вертикальную черту '|':
echo preg_replace('#a|b+|c#', '!', 'bbbb'); //выведет '!'
//Шаблон поиска такой: если вся строка - это 'a', или вся строка - один или более букв 'b', или вся строка - это 'c', то заменить ее на '!'.
//В данном случае 'или' действует на все регулярное выражение (по сути у нас три регулярки в одной).
// Можно работать и по-другому - поставим круглые скобки, и теперь '|' будет действовать только внутри них:

//Данный вариант 'или' отличается от квадратных скобок - он мощнее. Такие вещи,
//как в последнем примере (в начале 'a' или 'b' один или более раз) через [ ] не сделать.
//
//Для простых вещей '|' лучше не использовать: сравните (a|b|c) или [abc] – второй вариант короче.

//Команда \b обозначает начало или конец слова, а \B, соответственно,
// - не начало и не конец слова. Что такое слово?
// На первый взгляд кажется, что это нечто, ограниченное пробелами, но это не совсем так.

echo preg_replace('#\\\\#', '!', '\\ \\ \\\\'); //выведет '! ! !!'
//Шаблон поиска такой: обратный слеш один раз.

//Обратите внимание на '\\ \\ \\\\' - мы удваиваем все слеши для PHP,
// и в реальности строка выглядит так: '\ \ \\', поэтому в ответе будет '! ! !!', а не '!! !! !!!!'.
echo preg_replace('#\\\\+#', '!', '\\ \\ \\\\'); //выведет '! ! !'
//Шаблон поиска такой: обратный слеш один или более раз.


//Функция preg_replace имеет 4-тый необязательный параметр, который указывает, сколько замен произвести:
echo preg_replace('#a+#', '!', 'a aa aaa aaaa', 2); //выведет '! ! aaa aaaa'
//Функция произвела только две замены, все остальное не заменилось
// ('aaa' и 'aaaa' попали под регулярку но не поменялись на '!').

//echo preg_match('#^[a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', 'my-mail@mail.ru');

echo 'проверка мыла <br>';
echo preg_match('/^[a-zA-z-.]+@[a-z]+\.[a-z]{2,3}$/', 'belkill@mail.ru');
//Шаблон поиска такой:
//[a-zA-Z-.]+ маленькие или большие латинские буквы, точка или '-' 1 или более раз, @ потом @,
//[a-z]+ потом маленькие латинские 1 или более раз,
//\. потом точка,
//[a-z]{2,3}потом маленькие латинские два или три раза (ru, by, com и т.п.).


//карманы
echo '<hr>';
preg_match_all('#([a-z]+)\.([a-z]{2,3})#', 'yandex.ru mail.ru onliner.by', $matches);
//var_dump($matches);
echo '<pre>';
print_r($matches);
echo '</pre>';

echo '<hr>';
//echo preg_replace('#([a-z]+)@([a-z]+)#', '$2@$1', 'a@b aa@bb'); //b@a bb@aa

echo preg_replace('#([a-z]+)@([a-z]+)#',
    'второй карман: $2 первый карман: $1 все карманы: $0',
    'a@b aa@bb');


echo '<hr>';
echo '<p>К сожалению, скобки ( ) выполняют две функции - 
группировка символов и функцию кармана. А что делать, если нам 
нужно сгруппировать, но в карман не ложить? Для этого придуманы 
специальные несохраняющие скобки (выделены красным) (?:a+) 
- они группируют, но не ложат в карман: </p>';

echo preg_replace('#(?:ab)+([a-z])#', '!$1!', 'ababx abe'); //выведет '!x! !e!'
//?: отменило первый карман, значит второй карман стал первым и именно буквы Х и Е

//Шаблон поиска следующий: 'ab' один или более раз, затем одна буква, которую ложим в карман.
//Шаблон замены: заменим найденное на первый карман, обернутый '!' справа и слева.
//Так как первый карман - это ([a-z]), то в него попадет сначала 'x', а потом 'e'.

//(?<= ), которые просто смотрят, но не забирают с собой:

//Скобки (?<= ) называются позитивный просмотр назад.
// Позитивный - так как 'x' (в нашем случае) должен быть -
// только тогда произойдет замена. Есть и негативный просмотр назад - (?<! ) -
// он, наоборот, говорит, что чего-то должно не быть:

//Аналогичные операции выполняют позитивный просмотр вперед (?= ) и негативный просмотр вперед (?! ):

echo '<hr>';
echo preg_replace('#(?<=z)yy#i', '!', 'zyy ayy'); # позитивного и негативного просмотра

echo '<p>Задача. Дана строка с целыми числами \'a1b2c3\'. С помощью регулярки преобразуйте строку так, чтобы вместо этих чисел стояли их кубы. </p>';

echo preg_replace_callback('#(\d)+#', 'coob', 'a1b2c3');

function coob ($matches) {
    return pow($matches[0], 3);
}

echo "<p>Задача:	С помощью позитивного и негативного просмотра найдите все 
строки по шаблону буква b, затем 3 буквы a 
и поменяйте 3 буквы a на знак '!'. То есть из 'baaa' нужно сделать 'b!'.</p>";

echo preg_replace('#(?<=b)a{3}#', '!', 'baaa');

echo "<p>Задача: С помощью позитивного и негативного просмотра найдите все строки 
по шаблону любая буква, но не b, затем 3 буквы a и поменяйте 3 буквы a на знак \"!'. 
То есть из, к примеру, 'waaa' нужно сделать 'w!', а 'baaa\" не поменяется.</p>";

echo preg_replace('#(?<!b)a{3}#', '!', 'waaa baaa'); #(?<=)

echo "<p>Задача: С помощью позитивного и негативного просмотра найдите все строки 
по шаблону 3 буквы a, затем буква b и поменяйте 3 буквы a на знак '!'. То есть из 'aaab' нужно сделать '!b'</p>";

echo preg_replace('#a{3}(?=b)#', '!', 'waaa baaa aaab'); # исключаем b (?=)

echo "<p> Задача: С помощью позитивного и негативного просмотра 
найдите все строки по шаблону 3 буквы a, затем любая буква, 
но не b и поменяйте 3 буквы a на знак '!'. То есть из, к примеру, 'aaaw' нужно сделать '!w', а 'aaab' не поменяется</p>";
echo preg_replace('#a{3}(?!b)#','!', 'aaaw aaab'); # (?!)
//echo preg_replace('#aaa(?!b)#', '!', 'aaaw, aaab');

echo "<p>Задача: Дана строка со звездочками 'aaa * bbb ** eee * **'. 
Замените на '!' только одиночные звездочки, но не двойные</p>";

echo preg_replace('#(?<!\*)\*{2}(?!\*)#', '!', 'aaa * bbb ** eee * **');

echo "<p>Задача: С помощью позитивного и негативного просмотра 
найдите две одинаковые идущие подряд буквы и первую поменяйте на '!'.</p>";

echo preg_replace('#([a-z])(?=\1)#', '!', 'aabbccdefffgh' );

echo "<p>С помощью позитивного и негативного просмотра найдите 
две одинаковые идущие подряд буквы и вторую поменяйте на '!'.</p>";

echo preg_replace('#(?<=([a-z]))\1#', '!', 'aaabababbabbccccaccaaa');


echo "<p>Дана строка с целыми числами. С помощью регулярки 
преобразуйте строку так, чтобы вместо этих чисел стояли их квадраты.</p>";

echo preg_replace_callback('#\d#', 'quad', 'a1b2c3d4');

function quad ($item) {
    return pow($item[0],2);
}

echo "<p>Дана строка с целыми числами. Найдите числа, стоящие в 
кавычках и увеличьте их в два раза. Пример: из строки 2aaa'3'bbb'4' 
сделаем строку 2aaa'6'bbb'8'.</p>";

echo preg_replace_callback('#\'(\d+)\'#', 'x2', "2aaa'3'bbb'4'");

function x2 ($match) {
    return (int)$match[1] * 2;
}