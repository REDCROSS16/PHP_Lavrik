<?php

class Test2
{
    const CONSTANT = 'test';

    public function getConstant(){
        return self::CONSTANT;
    }
}


echo Test2::CONSTANT;

$test32 = new Test2;

echo $test32->getConstant();