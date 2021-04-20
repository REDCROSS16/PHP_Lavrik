<?php
require_once 'User.php';

class Employee2 extends User 
{
    public $salary;
    public $name;
    public $surname;

    public function __construct($name, $surname, $salary)
    {
        parent::__construct($name, $surname);
        $this->salary = $salary;
    }
}