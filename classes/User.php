<?php

class User
{
    protected $name;
    protected $surname;
    protected $age;
    protected $patronymic;
    protected $birthday;

    function __construct($name, $surname, int $yearmontsday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $yearmontsday; //19921216
    }

    public function show($str = 'nothing') {
        $rand = mt_rand(0, 100);
        return 'YOU WON ' . $str . ' ' . $rand . '<br>';
    }

    public function showMessage() {
        echo $this->name . ' say hello!';
    }

    // public function setName ($name) {
    //     if (strlen($name) > 3) {
    //         $this->name = $name;
    //         return $this;
    //     } else {
    //         echo 'неверное имя';
    //     }
        
    // }

    // public function setSurname ($surname) {
    //     $this->surname = $surname;
    //     return $this;
    // }

    public function getBirthday() {
         $year = (int) substr($this->birthday,0, 4);
         $month = (int) substr($this->birthday,4, 2);
         $day = (int) substr($this->birthday,6, 2);
         $date = [$year, $month, $day];
         return $date;
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


    public function subAge($years) {
        $newAge = $this->age - $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    private function isAgeCorrect($age) {
        return $age >= 18 && $age <= 60;
    }

    public function getAge() {
        return $this->age . ' year';
    }

    public function getName(){
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

    public function calculateAge() {
        // $this->getBirthday() ДОДЕЛАТЬ!!!
    }
}

$a = new User('Alex', 'Podol', '19921216');


print_r( $a->getBirthday());

?>
