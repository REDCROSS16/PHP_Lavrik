<?php 


require_once 'Employee.php';
require_once 'Student.php';
require_once 'Employee2.php';
require_once 'User.php';
require_once 'City.php';

$student1 = new Student('alex', 200);
$student2 = new Student('van', 150);
$student3 = new Student('bakc', 250);

$employee1 = new Employee('one', 1000);
$employee2 = new Employee('two', 2000);
$employee3 = new Employee('three', 3000);

$arr = [];
array_push($arr, $student1, $student2, $student3, $employee1, $employee2, $employee3);

// print_r($arr);
echo '<br>';
foreach ($arr as $item) {

    if ($item instanceof Student) {
        echo 'студент ' . $item->name . '<br>';
    }

    if ($item instanceof Employee) {
        echo 'работник ' . $item->name . '<br>';
    }   
}
$scholarship = 0;
foreach ($arr as $item) {
    if ($item instanceof Student) {
        $scholarship += $item->scholarship;
    }
    
}
echo 'сумма стипендий: ' . $scholarship;

$salary = 0;
foreach ($arr as $item) {
    if ($item instanceof Employee) {
        $salary += $item->salary;
    }
    
}
echo 'сумма зарплат: ' . $salary;
echo '<hr>';
$user1 = new User;
$user2 = new User;
$user3 = new User;
$employee21 = new Employee2;
$employee22 = new Employee2;
$employee23 = new Employee2;
$city1 = new City; 
$city2 = new City; 
$city3 = new City; 

$arr = [$use1, $user2, $user3, $employee21, $employee22, $employee23, $employee24, $city1, $city2, $city3 ];

foreach ($arr as $item) {
    if ($item instanceof User) {
        
    }
}
