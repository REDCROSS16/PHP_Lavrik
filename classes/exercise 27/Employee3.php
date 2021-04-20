<?php
	class Employee3
	{
		private $name; // имя
		private $salary; // зарплата
		
		public function __construct($name, $salary)
		{
			$this->name = $name;
			$this->salary = $salary;
		}
		
		// Геттер имени:
		public function getName()
		{
			return $this->name;
		}
		
		// Геттер зарплаты:
		public function getSalary()
		{
			return $this->salary;
		}
	}
?>