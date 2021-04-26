<?php

class Employee5 extends User5
{
    private $salary;

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value;
    }

    public function decreaseRevenue($value)
    {
        $this->salary = $this->salary - $value;
    }
}