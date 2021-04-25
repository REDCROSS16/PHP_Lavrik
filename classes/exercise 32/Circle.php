<?php
require_once 'Test.php';
class Circle

{
    const PI = 3.14;
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return self::PI * pow($this->radius, 2);
    }

    public function getCircuit(){
        return self::PI * 2 * $this->radius;
    }
}


$circle = new Circle(10);
echo 'Окружность: ' . $circle->getCircuit();
echo '<br>';
echo 'Площадь: ' . $circle->getSquare();

echo get_class($circle); # получить класс объекта
print_r (get_class_methods($circle)); # получить методы класса

$test = new Test2;
$arr = get_class_methods($test);
$test->name = 'alex';
foreach ($arr as $item) {
    echo $test->$item() . '<br>';
}


$array = get_class_vars('Test');
print_r($array);
$out = '';
//foreach ($array as $arr) {
//    $out .= $arr . '<br>';
//}
//
//echo  $out;

print_r( $test->getVars());

echo '<hr>';
echo class_exists(get_class($test));
echo class_exists('Test2');
echo '<hr>';
echo 'есть ли класс ' . $_GET['class'].'? - ' . class_exists($_GET['class']);

echo '<pre>';
print_r( get_declared_classes());
echo '</pre>';