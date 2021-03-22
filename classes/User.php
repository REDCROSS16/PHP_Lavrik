<?php

class User
{
    public $name;
    public $age;

    public function show($str = 'nothing') {
        $rand = mt_rand(0, 100);
        return 'YOU WON ' . $str . ' ' . $rand . '<br>';
    }

    public function showMessage() {
        echo $this->name . ' say hello!';
    }

    public function setName ($name) {
        $this->name = $name;
    }

    public function setAge ($age) {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
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

}

$sanya = new User;
$vasya = new User;

$sanya->setAge(28);
$vasya->setAge(30);

$user = new User;
$user->setName('Коля');
$user->setAge(20);
$user->addAge(30);

?>


<h1>Тестирую классы и учу ООП</h1>

<p><?=$user->name . ' ' . $user->age;?></p>
<p></p>