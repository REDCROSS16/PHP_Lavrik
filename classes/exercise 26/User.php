<?php
	class User
	{
		private $name;
		private $age;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}
?>


<?php
	$user1 = new User('Коля', 30);
	$user2 = new User('Коля', 30);
	
	var_dump($user1 == $user2); // выведет true


    $user3 = new User('Коля', 30);
	$user4 = $user3; // передача объекта по ссылке
	
	var_dump($user4 === $user3);
?>


