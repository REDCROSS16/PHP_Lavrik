<?php

require_once '../exercise 56/Date.php';
class Interval
{
    private $date1;
    private $date2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    // разница в днях
    public function toDays() : int
    {
        return abs($this->date1->getDay()-$this->date2->getDay());
    }

    public function toMonths()
    {
        return abs($this->date1->getMonth()-$this->date2->getMonth());
    }

    public function toYears()
    {
        return abs($this->date1->getYear()-$this->date2->getYear());
    }

    // выведет результат в виде массива
    // ['years' => '', 'months' => '', 'days' => '']
    public function __toString()
    {
        $arr = [
            'years' => $this->toYears(),
            'months' => $this->toMonths(),
            'days' => $this->toDays(),
            ];
        return json_encode($arr);

    }
}

$interval = new Interval(new Date('15 May 2015'), new Date('21 september 2000'));
echo $interval->toDays();
echo '<hr>';
echo $interval->toMonths();
echo '<hr>';
echo $interval->toYears();
echo '<hr>';
echo $interval;