<?php

class Arr 
{
    private $numbers = [];

    public function __construct($nums)
    {
        $this->numbers = $nums;
    }

    public function add ($nums) {
        if (is_array($nums)) {
            foreach ($nums as $num) {
                array_push($this->numbers, $num);    
            }
            print_r($this->numbers);
            return $this->numbers;
        } 
        if (is_numeric($nums)) {
            return array_push($this->numbers, $nums);
        }
        
    }

    public function getAvg (array $nums) {
        $count = count($nums);
        $sum = 0;
        foreach ($nums as $num) {
            if (is_numeric($num)) {
                $sum += $num;
            }
        }
        $ariphmetic = $sum / $count;

        return "Среднее арифмитическое чисел : $ariphmetic";
    }

    public function getSum() {
        return array_sum($this->numbers);
    }

}


// $out = new Arr;

// $array = [1,2,3,4,5, 50];
// echo '<pre>';
// $out->add($array);
// echo '</pre>';

// echo '<br>';
// echo $out->getAvg($array);

$arr = new Arr([1, 2, 3, 5, 7]);
$arr->add(10);
$arr->add(20);

echo '<br> сумма чисел ' . $arr->getSum() . '<br>';
echo 'Сумма двух методов объектов: ';
echo (new Arr([50, 100, 200]))->getSum() + (new Arr([30, 50 , 100]))->getSum(); 

echo '<br>';
echo '16.1 : ' . (new Arr([300,300,300,100]))->getSum();