<?php 

require '../User.php';
require '../Employee.php';


// $one = new User;

// $one->setAge(35);

// echo $one->getAge();

// $two = new Employee('lol', 25, 2300);

// $two->setAge(21);
// echo '<br>Возраст: ';
// echo $two->getAge();
// echo '<br>Зарплата: ';
// echo $two->getSalary();


$workerOne = new Employee('Alex', 32, 4000);
$workerTwo = new Employee('Petrov', 40, 2500);

echo '<br>';
echo 'Зарплата новеньких: ';
echo $workerOne->getSalary()+$workerTwo->getSalary();


$user1 = new User('Коля', 25);
$user2 = new User('Вася', 22);
$user3 = new User('Дима', 40);

$users[] = $user1;
$users[] = $user2;
$users[] = $user3;

// echo '<pre>';
// print_r($users);
// echo '<pre>';
echo '<br>';
echo 'Возраст массива ' . '<br>';
foreach ($users as $user) {
    echo $user->name . ' ' . $user->getAge() . '<br>';
}

$props = ['name', 'surname', 'patronymic'];

$user4 = new User('Ваня', 51);
$user4->patronymic = 'Вячеславович';
$user4->surname = 'Новый';

echo '<hr>';
echo $user4->{$props[0]} . ' ';
echo $user4->{$props[1]} . ' ';
echo $user4->{$props[2]} . ' ';

echo '<hr>';
$arrayProps = [
    'prop1' => 'surname',
    'prop2' => 'name',
    'prop3' => 'patronymic',
];
echo '<br> ассоциативный массив : ' . $user4->{$arrayProps['prop2']};

function getProp() 
{
    return 'surname';
}

echo '<br> через функцию : ' . $user4->{getProp()};
echo '<hr>';
class Prop 
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

$user5 = new User('Иванов', 25);
$prop5 = new Prop('name');

echo '<br> через свойство класса : ' . $user5->{$prop5->value};

echo '<hr>';
$methods = [
    'method1' => 'getName',
    'method2' => 'getAge',
];
echo '<br> 15.1 : ' . $user5->{$methods['method1']}() . ' ' . $user5->{$methods['method2']}();
