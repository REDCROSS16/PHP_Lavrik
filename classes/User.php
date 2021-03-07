<?php


class User
{
    public $name;
    public $age;

}

$sanya = new User;

$sanya->name = 'Саня';
$sanya->age = 28;

echo 'name:';
echo $sanya->name;
echo '<br>';
echo 'Age:';
echo $sanya->age;
echo '<br>';


$vasya = new User;
$vasya->name = 'Yasya';
$vasya->age = 35;

echo 'name:';
echo $vasya->name;
echo '<br>';
echo 'Age:';
echo $vasya->age;
echo '<br>';


$sum = $vasya->age + $sanya->age;
echo 'Сумма возрастов: ' . $sum;

?>


