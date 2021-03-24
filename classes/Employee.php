<?


/**
 * Класс работника
 *  */ 

class Employee 
{
    public $name;
    public $age;
    public $salary;

    function __construct ($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName() {
        $name = $this->name;
        return $name;
    }

    public function getAge() {
        $age = $this->age;
        return $age;
    }

    public function getSalary() {
        $salary = $this->salary;
        return $salary;
    }

    public function checkAge () {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
    public function setName ($name) {
        $this->name = $name;
    }

    public function doubleSalary () {
        $dblSalary = $this->getSalary() * 2;
        return $dblSalary;
    }
}

// $worker1 = new Employee;
// $worker2 = new Employee;

// $worker1->age = 17;
// $worker2->age = 30;

// $worker1->salary = 3000;
// $worker2->salary = 5000;

// $worker1->name = 'RED';
// $worker2->name = 'Cross';



// echo ($worker1->checkAge());

// $worker1->setName('Alexander');
// $worker2->setName('Vladimir');


$vasya = new Employee('Vasya', 25, 1000);
$petya = new Employee('Petya', 30, 2000);
?>
<h4>Совместная зп: <?=$vasya->salary + $petya->salary;?></h4> 


<?php 

$vasya->setName('Коля');


?>


<p> <?=$vasya->name;?></p>
<p>и его зарплата: <?=$vasya->getSalary();?></p>
