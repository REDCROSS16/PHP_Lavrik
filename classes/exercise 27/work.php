<?php 


require_once 'Employee.php';
require_once 'Student.php';

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