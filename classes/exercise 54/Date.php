<?php

//Задача 54.2
//
//Сделайте класс Date с публичными свойствами year (год), month (месяц) и day (день).
//
//С помощью магии сделайте свойство weekDay, которое будет возвращать день недели, соответствующий дат

class Date54
{
    public $year;
    public $month;
    public $day;

    public function __get($property)
    {
        if ($property === 'weekday') {
            $date = DateTime::createFromFormat('j-M-Y', "$this->day-$this->month-$this->year");
            return $date->format('D');
        }
    }
}

$day = new Date54();

$day->year = '2021';
$day->month = 'nov';
$day->day = '1';

echo $day->weekday;