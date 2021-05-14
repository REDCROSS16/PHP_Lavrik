<?php

class ArrayAvgHelper 
{
    /**
     * Метод нахождения суммы первых степеней элементов массива
     */
    public function getAvg1($array) 
    {
        $sum = 0;

        foreach ($array as $arr) {
            $sum += $arr ** 1;
        }
        return $sum;
    }

    /**
     * Находит сумму вторых степеней элементов массива и извлекает из нее квадратный корень:
     */
    public function getAvg2($array)
    {
        $sum = 0;

        foreach ($array as $arr) {
            $sum += $arr ** 2;
        }
        return pow($sum,1/2);
    }

    /**
	*	Находит сумму третьих степеней элементов массива и извлекает из нее кубический корень:
	*/
    public function getAvg3($array)
    {
        $sum = 0;

        foreach ($array as $arr) {
            $sum += $arr ** 3;
        }
        return pow($sum,1/3);
    }

    /**	
     * Находит сумму четвертых степеней элементов массива и извлекает из нее корень четвертой степени:
	*/
    public function getAvg4($array)
    {
        $sum = 0;

        foreach ($array as $arr) {
            $sum += $arr ** 4;
        }
        return pow($sum, 1/4);
    }

    /**	Вспомогательный метод, который параметром 
     * принимает массив и степень и возвращает сумму степеней элементов массива:
	*/
    private function getSum($arr, $power)
    {
    
    }


}


echo ArrayAvgHelper::getAvg2([1,3,5,6,7,8,9]);
echo ArrayAvgHelper::getAvg3([3,2]);