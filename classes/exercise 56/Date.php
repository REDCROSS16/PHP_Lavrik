<?php

/*
 * Класс для работы с датами*/
class Date
{
    private $date;

    public function __construct($date = null)
    {
        if ($date != null) {
            $this->date = new DateTime($date);
        } else {
            $this->date = new DateTime();
        }

    }

    /*
     * Получить день
     * */
    public function getDay()
    {
        return $this->date->format('d');
    }

    /**
     * Получить месяц
     * переменная $lang может принимать значение ru или en
    // если эта не пуста - пусть месяц будет словом на заданном языке
     */
    public function getMonth($lang = null)
    {
        if ($lang === 'ru') {
            $ruMonths = [
                'Январь', 'Февраль', 'Март',
                'Апрель', 'Май', 'Июнь', 'Июль',
                'Август', 'Сентябрь', 'Октябрь',
                'Ноябрь', 'Декабрь'
            ];
            return 'Месяц : ' . $ruMonths[(int)$this->date->format('m')-1] . '<br>';
        }
        if ($lang === 'en') {
            $enMonths = [
                'January', 'February', 'March',
                'April', 'May', 'June', 'July',
                'August', 'September', 'October',
                'November', 'December'
            ];
            return 'Месяц : ' . $enMonths[(int)$this->date->format('m')-1] . '<br>';

        } else {
            return $this->date->format('m');
        }
    }

    /*
     * Получить год
     * */
    public function getYear()
    {
        return $this->date->format('Y');
    }

    /*
     * Получить неделю
     * */
    public function getWeekDay($lang = null) : string
    {
        if ($lang === 'ru') {
            $ruDays = [
                'Понедельник', 'Вторник', 'Среда', 'Четверг',
                'Пятница', 'Суббота', 'Воскресенье'
            ];
            return 'День недели : ' . $ruDays[(int)$this->date->format('N') - 1];
        }
        if ($lang === 'en') {
            $enDays = [
                'Monday', 'Tuesday', 'Wednesday', 'Thursday',
                'Friday', 'Saturday', 'Sunday'
            ];
            return 'День недели : ' . $enDays[(int)$this->date->format('N') - 1];
        } else {
            return $this->date->format('N');
        }

    }

    /*
     * Прибавляет значение $value к дню
     * */
    public function addDay($value)
    {
        return date('Y-m-d',$this->date->getTimestamp()+$value*24*60*60);

    }

    /*
     * отнимает значение $value от дня
     * */
    public function subDay($value)
    {

        return date('Y-m-d',$this->date->getTimestamp()-$value*24*60*60);
    }

    /*
     * добавляет значение $value к месяцу
     * */
    public function addMonth($value)
    {
        return date('Y-m-d',$this->date->getTimestamp()+$value*30*24*60*60);
    }

    /*
     * отнимает значение $value от месяца
     * */
    public function subMonth($value)
    {
        return date('Y-m-d',$this->date->getTimestamp()-$value*30*24*60*60);
    }
    /*
    * добавляет значение $value к году
    * */
    public function addYear($value)
    {
        return date('Y-m-d',$this->date->getTimestamp()+$value*12*30*24*60*60);
    }
    /*
        * отнимает значение $value от года
        * */
    public function subYear($value)
    {
        return date('Y-M-d',$this->date->getTimestamp()-$value*12*30*24*60*60);
    }

    /**
     * выведет дату в указанном формате
    // формат пусть будет такой же, как в функции date
     * @param $format
     */
    public function format($format)
    {
       return date($format, $this->date->getTimestamp());
    }

    /**
    * выведет дату в формате 'год-месяц-день'
     */
    public function __toString() : string
    {
        return $this->date->format('Y-m-D');
    }
}


//$date = new Date();
//
//echo $date->getDay();
//echo $date->getMonth('ru');
//echo $date->getYear();
//echo '<hr>';
//echo $date->getWeekDay();
//echo $date->getWeekDay('ru');
//echo $date->getWeekDay('en');
//echo '<hr>';
//echo $date->addDay(10);
//echo '<hr>';
//echo $date;
//echo '<hr>';
//echo $date->subMonth(5);
//echo '<hr>';
//echo $date->subYear(4);
//echo '<hr>';
//echo $date->format('D-Y-M');