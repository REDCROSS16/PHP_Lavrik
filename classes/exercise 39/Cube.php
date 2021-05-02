<?php

namespace exercise_39;

class Cube implements iCube
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
    // объем куба
    public function cubeSquare()
    {
        return pow($this->a, 3);
    }

    
    // площадь поверхностей куба 
    public function cubeVolume()
    {
        return 6 * pow($this->a, 2);
    }
}