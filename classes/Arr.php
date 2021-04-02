<?php

class Arr 
{
    public $numbers = [];

    public function add (array $nums) {
        foreach ($nums as $num) {
            array_push($this->numbers, $num);    
        }
        print_r($this->numbers);
        return $this->numbers;
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

}


$out = new Arr;

$array = [1,2,3,4,5, 50];
echo '<pre>';
$out->add($array);
echo '</pre>';

echo '<br>';
echo $out->getAvg($array);