<?php

namespace exercise_34;
/**
 * Class Disc
 * @package
 * реализует объект круга
 * @r радиус
 */
class Disc implements Figure
{
    const PI = 3.14;
    private $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getPerimeter()
    {
        return 2 * self::PI * $this->r;
    }
    public function getSquare()
    {
        return self::PI * pow($this->r, 2);
    }
}