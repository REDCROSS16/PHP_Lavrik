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
        if ($age > 18) {
            $this->age = $age;
        }
    }

}

$sanya = new User;

$vasya = new User;

$sanya->setName('Sanya');
$vasya->setName('Vasya');

$sanya->setAge(28);
$vasya->setAge(30);

$user = new User;
$user->setName('Коля');
$user->setAge(25);

// echo $user->name . ' ' . $user->age;

?>


<h1>Тестирую классы и учу ООП</h1>

<p><?=$user->name . ' ' . $user->age;?></p>