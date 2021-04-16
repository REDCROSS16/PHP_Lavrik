<?php 
require_once 'Employee.php';
class EmployeesCollection 
{
    private $employees = [];

    public function add ($employee) 
    {
        $this->employees[] = $employee;
    }
    public function getTotalSalary () {
        $sum = 0;
        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }
        return $sum;
    }

    public function count() {
        return count($this->employees);
    }
}

$employeesCollection = new EmployeesCollection;
$employeesCollection->add(new Employee('Коля', 2000));
$employeesCollection->add(new Employee('Ваня', 3000));
$employeesCollection->add(new Employee('Саша', 2000));
$employeesCollection->add(new Employee('Петя', 3500));

echo $employeesCollection->getTotalSalary();