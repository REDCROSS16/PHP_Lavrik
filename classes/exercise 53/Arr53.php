<?php

class Arr53
{
    private $numbers;

    public function add($num) : Arr53
    {
        $this->numbers[] = $num;
        return $this;
    }

    public function __toString() : string
    {
        return (string) $this->getSum();
    }

    public function getSum() {
        return array_sum($this->numbers);
    }
}


$test = new Arr53;

$test->add(50)->add(60)->add(70);

echo $test;
echo '<br>';
echo 'result __toString : ';
echo $test;

