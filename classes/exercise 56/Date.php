<?php

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
    public function getDay() : string
    {
        return 'Текущий день : ' . $this->date->format('d') . '<br>';
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
            return 'Месяц : ' . $this->date->format('m') . '<br>';
        }
    }

    /*
     * Получить год
     * */
    public function getYear() : string
    {
        return 'Год : ' .$this->date->format('Y') . '<br>';
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
        return date('Y-m-d', $this->date + $value*24*60);

    }

    /*
     * отнимает значение $value от дня
     * */
    public function subDay($value)
    {

    }

    /*
     * добавляет значение $value к месяцу
     * */
    public function addMonth($value)
    {

    }

    /*
     * отнимает значение $value от месяца
     * */
    public function subMonth($value)
    {

    }
    /*
    * добавляет значение $value к году
    * */
    public function addYear($value)
    {

    }
    /*
        * отнимает значение $value от года
        * */
    public function subYear($value)
    {

    }

    /**
     * выведет дату в указанном формате
    // формат пусть будет такой же, как в функции date
     * @param $format
     */
    public function format($format)
    {
        //
    }

    /**
    * выведет дату в формате 'год-месяц-день'
     */
    public function __toString() : string
    {

    }
}


$date = new Date();

echo $date->getDay();
echo $date->getMonth('ru');
echo $date->getYear();
echo $date->getWeekDay();
echo $date->getWeekDay('ru');
echo $date->getWeekDay('en');
echo $date->addDay(5);