
<?php



    #in_array($newEmployee, $this->employees, false) - если false то сравнение 
    # true - strict более точное сравнение или ===

    require_once "Employee.php";
	class EmployeesCollection
	{
		private $employees = []; // массив работников
		
		// Добавляем нового работника:
		public function add($newEmployee)
		{   
            if (!in_array($newEmployee, $this->employees, false)) {
    			$this->employees[] = $newEmployee;
            } else {
                $this->employees[] = "object {$newEmployee->getname()} now exist";
            }
		}

        
		
		// Получаем всех работников в виде массива:
		public function get()
		{
			return $this->employees;
		}

        private function exists($newEmployee)
	    {
		    foreach ($this->employees as $employee) {
			    if ($employee == $newEmployee) { // сравниваем через ==
				    return true;
			    }
		    }
		
		    return false;
	    }
	}


    $employeesCollection = new EmployeesCollection;
	
	$new1 = new Employee('Вася', 100);
    $employeesCollection->add($new1);

	$employeesCollection->add(new Employee('Вася', 100)); // добавит
	$employeesCollection->add(new Employee('Коля', 100)); // добавит
	$employeesCollection->add(new Employee('Коля', 100)); // добавит
	$employeesCollection->add(new Employee('Коля', 25)); // добавит
    $employeesCollection->add($new1);


	

    echo '<pre>';
	print_r($employeesCollection->get());
    echo '</pre>';
?>