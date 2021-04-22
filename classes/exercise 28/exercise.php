<?php

require_once 'Post.php';
require_once 'Employee.php';


$programmer = new Post('Programmer', 1000);
// $programmer->name = 'Programmer';
// $programmer->salary = 10000;
$manager = new Post('manager', 2000);
$driver = new Post('Driver', 500);

$employee1 = new Employee('Alex', 'Podolnitsky', $programmer);

// $employee1->post->salary = 10000;

echo $employee1->getName() .' ' .   $employee1->post->name;
echo $employee1->post->salary;

$employee1->changePost($driver);
echo $employee1->post->name . $employee1->post->salary;