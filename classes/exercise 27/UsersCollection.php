<?php 

require_once 'Student2.php';
require_once 'Employee3.php';

class UsersCollection 
{
    private $employees = []; // массив работников
    private $students = []; // массив студентов

    public function add ($user) {
        if ($user instanceof Student2) {
            $this->students[] = $user;
        }
        if ($user instanceof Employee3) {
            $this->employees[] = $user;
        }
    }
    // Получаем суммарную зарплату:
    public function getTotalSalary()
    {
        $sum = 0;
        
        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }
        
        return $sum;
    }
    
    // Получаем суммарную стипендию:
    public function getTotalScholarship()
    {
        $sum = 0;
        
        foreach ($this->students as $student) {
            $sum += $student->getScholarship();
        }
        
        return $sum;
    }
    
    // Получаем общую сумму платежей и работникам, и студентам:
    public function getTotalPayment()
    {
        return $this->getTotalScholarship() + $this->getTotalSalary();
    }
}