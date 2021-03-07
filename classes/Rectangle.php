<?php

class Rectangle 
{
    public $width;
    public $height;


    public function getSquare() {
        $square = $this->width * $this->height;
        return $square;
    }

    public function getPerimeter() {
        $perimeter = ($this->width + $this->height) * 2;
        return $perimeter;
    }

}

$rectangle = new Rectangle;
$rectangle->height = 100;
$rectangle->width = 300;

?>

<p>Периметр: <?=$rectangle->getPerimeter();?></p>
<p>Площадь: <?=$rectangle->getSquare();?></p>