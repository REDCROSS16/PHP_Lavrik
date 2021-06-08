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
