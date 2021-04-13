<?php

require_once 'User.php';
/**
 * Класс работника
 *  */ 

class Employee extends User
{
    public $name;
    protected $age;
    private $salary;
    public $surname;
    public $patronymic;

    function __construct ($name, $surname, int $year_months_day, $salary) {
        parent::__construct($name, $surname, $year_months_day); #конструктор родителя!!!!!!!!
        $this->salary = $salary;
    }


    public function getSalary() {
        $salary = $this->salary;
        return $salary . '$';
    }

    public function checkAge () {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function doubleSalary () {
        $dblSalary = $this->getSalary() * 2;
        return $dblSalary;
    }
    
}

?>