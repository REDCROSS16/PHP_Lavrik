<?php
namespace exercise_40;

class Employee implements iEmployee
{
    private $name;
    private $age;
    private $salary;

    public function setsalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age) 
    {
        $this->age = $age;
    }

    public function getAge() 
    {
        return $this->age;
    }

}
