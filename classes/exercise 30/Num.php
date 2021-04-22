<?php

class Num 
{
    public static $num1 = 2;
    public static $num2 = 3;

    public static function getSum() {
        echo 'произведение :' . self::$num1 * self::$num2;
    }
}



echo Num::$num1 + Num::$num2;


Num::getSum();