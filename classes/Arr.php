<?php
require_once 'Sumhelper.php';
class Arr 
{
    private $numbers = [];
    private $sumHelper;

    public function __construct($nums)
    {
        $this->numbers = $nums;
        $this->sumHelper = new SumHelper;
        
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
    /**
     * методом getAvg, который параметром будет принимать массив 
     * и возвращать среднее арифметическое этого массива 
     * (сумма элементов делить на количество)
     */
    public function getAvg (array $nums) {
        $count = count($nums);
        $sum = 0;
        foreach ($nums as $num) {
            if (is_numeric($num)) {
                $sum += $num;
            }
        }
        $ariphmetic = $sum / $count;
        $msg = 'Среднее квадратичное : ';

        return $ariphmetic;
    }

    /**
     * сумма элементов массива
     */
    public function getSum() {
        return array_sum($this->numbers);
    }

    /**
     * сумма квадратов и кубов
     */
    public function getSum23() {
        $num = $this->numbers;
        
        return $this->sumHelper->getSum2($num) + $this->sumHelper->getSum3($num);
    }

    /**
     * метод getMeanSquare, который параметром будет 
     * принимать массив и возвращать среднее квадратичное 
     * этого массива (квадратный корень, извлеченный из 
     * суммы квадратов элементов, деленной на количество)
     */
    public function getMeanSquare(){
        $squadSum = 0;
        $countElem = count($this->numbers);
        foreach ($this->numbers as $item) {
            $squadSum += $item ** 2;
        }
        $msg = 'Среднее квадратичное : ';
        return pow($squadSum, 0.5) / $countElem; 
    }

    /**
     * метод getAvgMeanSum, который будет находить сумму 
     * среднего арифметического и среднего квадратичного 
     * из массива $this->nums
     */
    public function getAvgMeanSum() {
        return $this->getAvg($this->numbers) + $this->getMeanSquare();
    }

}


// $out = new Arr;

// $array = [1,2,3,4,5, 50];
// echo '<pre>';
// $out->add($array);
// echo '</pre>';

// echo '<br>';
// echo $out->getAvg($array);

$arr = new Arr([1, 2]);
echo $arr->getMeanSquare();

// echo '<br> сумма чисел ' . $arr->getSum() . '<br>';
// echo 'Сумма двух методов объектов: ';
// echo (new Arr([50, 100, 200]))->getSum() + (new Arr([30, 50 , 100]))->getSum(); 

// echo '<br>';
// echo '16.1 : ' . (new Arr([300,300,300,100]))->getSum();