<?php

namespace exercise_41;

class Cube implements Figure3d
{
    private $a;

    public function getVolume(){
        return pow($this->a, 3);
    }
    public function getSurfaceSquare()
    {
        return 6 * pow($this->a, 2);
    }
}