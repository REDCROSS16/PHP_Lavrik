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
$user1 = new User('a', 'b');
$user2 = new User('c', 'd');
$user3 = new User('e', 'f');
$employee21 = new Employee2('e1', 'e2', 1000);
$employee22 = new Employee2('e3', 'e4', 5000);
$employee23 = new Employee2('e5', 'e6', 10000);
$city1 = new City('Vitebsk', 350000); 
$city2 = new City('Gomel', 500000); 
$city3 = new City('Minsk', 1000000); 

$arr = [$user1, $user2, $user3, $employee21, $employee22, $employee23, $employee24, $city1, $city2, $city3 ];

echo 'Принадлежат классу USER<br>';
foreach ($arr as $item) {
    if ($item instanceof User) {
        echo $item->name . ' ' .get_class($item) . '<br>' ;
    }
}
echo '<hr>';
echo 'НЕ Принадлежат классу USER';
foreach ($arr as $item) {
    if (!($item instanceof User)) {
        echo $item->name . ' ' .get_class($item) . '<br>' ;
    }
}
echo '<hr>';
echo 'Принадлежат только классу USER<br>';
foreach ($arr as $item) {
    if ($item instanceof Employee2) {
        continue;
    }
    if ($item instanceof User) {
        echo $item->name . ' ' .get_class($item) . '<br>' ;
    }
}
echo '<hr>';