<?php 

require '../User.php';
require '../Employee.php';


$one = new User;

$one->setAge(35);

echo $one->getAge();

$two = new Employee('lol', 25, 2300);

$two->setAge(21);
echo '<br>Возраст: ';
echo $two->getAge();
echo '<br>Зарплата: ';
echo $two->getSalary();