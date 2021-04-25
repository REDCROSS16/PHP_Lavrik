<?php

class User31
{
    public $name;
    private static $count;

    public function __construct ($name) {
        $this->name = $name;
        self::$count++;
    }
    public static function getCount(){
        return self::$count;
    }
}

$test1 = new User31('va');
$test2 = new User31('asd');
$test3 = new User31('asd');
$test4 = new User31('asd');


echo $test2::getCount();
echo User31::getCount();