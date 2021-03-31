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


}


$out = new Arr;

$out->add([1,2,3,4,5]);