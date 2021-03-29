<?php 

require '../User.php';
require '../Employee.php';


// $one = new User;

// $one->setAge(35);

// echo $one->getAge();

// $two = new Employee('lol', 25, 2300);

// $two->setAge(21);
// echo '<br>Возраст: ';
// echo $two->getAge();
// echo '<br>Зарплата: ';
// echo $two->getSalary();


$workerOne = new Employee('Alex', 32, 4000);
$workerTwo = new Employee('Petrov', 40, 2500);

echo '<br>';
echo 'Зарплата новеньких: ';
echo $workerOne->getSalary()+$workerTwo->getSalary();


$user1 = new User('Коля', 25);
$user2 = new User('Вася', 22);
$user3 = new User('Дима', 40);

$users[] = $user1;
$users[] = $user2;
$users[] = $user3;

// echo '<pre>';
// print_r($users);
// echo '<pre>';
echo '<br>';
echo 'Возраст массива ' . '<br>';
foreach ($users as $user) {
    echo $user->name . ' ' . $user->getAge() . '<br>';
}