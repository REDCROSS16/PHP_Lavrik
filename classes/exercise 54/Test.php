<?php

class Test54
{
    public $A = 50;
    private $B;

    public function __get($property)
    {
        return $property;
    }


}


$test = new Test54;

echo $test->A;
echo $test->B;
echo $test->C;