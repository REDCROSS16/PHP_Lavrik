<?php

class User
{
    protected $name;
    protected $surname;
    private $age;
    public $patronymic;
    protected $birthday;

    function __construct($name, $surname, int $year_months_day)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $this->calculateAge($year_months_day); //19921216
    }

    public function show($str = 'nothing') {
        $rand = mt_rand(0, 100);
        return 'YOU WON ' . $str . ' ' . $rand . '<br>';
    }

    public function showMessage() {
        echo $this->name . ' say hello!';
    }

    /**
     * Метод считает возраст пользователя
     */
    public function calculateAge($year_months_day) {
        $y = (int)substr($year_months_day, 0, 4);
        $m = (int)substr($year_months_day, 4, 2);
        $d = (int)substr($year_months_day, 6, 2);
        
        if ($m > date('m') || $m == date('m') && $d > date('d')) {
            return (date('Y') - $y - 1);
        } else {
            return (date('Y') - $y);
        }

    }

    public function setPatronymic ($patronymic) {
        $this->patronymic = $patronymic;
        return $this;
    }

    public function setAge ($age) {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
        return $this;
    }

    public function addAge($years) {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }


    public function subAge($years) 
    {
        $newAge = $this->age - $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    private function isAgeCorrect($age) 
    {
        return $age >= 18 && $age <= 60;
    }

    public function getAge() 
    {
        return $this->age . ' year';
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getFullInfo() 
    {
        echo $this->name . ' ' . $this->surname . ' ' . 
            $this->patronymic . ' ' . $this->age . ' year';
    }

    public function getFIO() 
    {
        echo $this->name[0] . $this->surname[0] . $this->patronymic[0];
    }

    public function getPatronimyc() {
        return $this->patronymic;
    }

}

$a = new User('Alex', 'Podol', '19921216');

echo $a->getAge();
?>


