<?php

class SumHelper 
{
    // Сумма квадратов:
    public function getSum2($arr)
    {
        return $this->getSum($arr, 2);
    }
    
    // Сумма кубов:
    public function getSum3($arr)
    {
        return $this->getSum($arr, 3);
    }
    
    // Вспомогательная функция для нахождения суммы:
    private function getSum($arr, $power) {
        $sum = 0;
        
        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }
        
        return $sum;
    }
}