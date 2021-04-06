<?php 

class Arra 
{
    private $numbers = [];

    public function add ($number) 
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
    public function append($array) {
        array_push($this->numbers, $array);
        return $this;
    }

    public function getResult() 
    {
        return $this->numbers;
    }
}

$arr = new Arra;

$arr->add(1);
$arr->add(12);
$arr->add(35);

echo $arr->getSum();

$arr2 = new Arra;

echo '<br>';

echo $arr2->add(1)->add(2)->add(3)->add(1500)->getSum();

$arr3 = new Arra;

$arr3->add(5)->add(20)->append([3, 5, 6]);

echo '<pre>';
print_r($arr3->getResult());
echo '</pre>';

$arr3->add(10);

echo '<hr>';
echo '<pre>';
print_r($arr3->getResult());
echo '</pre>';
echo '<hr>';

$arr3->append([5,5,5]);
echo '<pre>';
print_r($arr3->getResult());
echo '</pre>';
echo '<hr>';
echo 'sum : ' . $arr3->getSum();

