<?php

require_once 'User.php';
require_once 'Employee5.php';

$user = new Employee5();
$user->setName('Коля');
$user->setSalary(10000);

echo $user->getName();
echo $user->getSalary();