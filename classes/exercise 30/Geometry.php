<?php

class Geometry 
{
    private static $pi = 3.14;

    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    public static function getCircleCircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }
    public static function getVolumeSphere($radius)
    {
        return 4/3 * self::$pi * pow($radius,3);
    }
}


echo 'Площадь круга : ' . Geometry::getCircleSquare(5) . '<br>';
echo 'Длина окружности : ' . Geometry::getCircleCircuit(5) . '<br>';
echo 'Объем шара : ' . Geometry::getVolumeSphere(10) . '<br>';