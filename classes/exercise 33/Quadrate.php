<?php

require_once 'Figure.php';
//namespace Figure;

class Quadrate extends Figure
{
    private $a;
    private $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getPerimeter()
    {
        return 2 * ($this->a + $this->b);
    }

    public function getSquare()
    {
        return $this->a * $this->b;
    }
}

$quadrate = new Quadrate(10,10);

echo 'S: ' . $quadrate->getSquare() . ' P: ' . $quadrate->getPerimeter();

echo '<br>' . $quadrate->getRatio();

echo '<br>' . $quadrate->getSquarePerimeterSum();