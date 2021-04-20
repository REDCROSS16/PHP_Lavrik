<?php
	class Student
	{
		private $name; // имя
		private $scholarship; // стипендия
		
		public function __construct($name, $scholarship)
		{
			$this->name = $name;
			$this->scholarship = $scholarship;
		}
		
		// Геттер имени:
		public function getName()
		{
			return $this->name;
		}
		
		// Геттер стипендии:
		public function getScholarship()
		{
			return $this->scholarship;
		}
	}
?>