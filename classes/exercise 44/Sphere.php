<?php

class Sphere implements iSphere
{
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getVolume()
    {
        return self::PI * pow($this->radius, 2);
    }

    public function getSquare()
    {
            
    }


}

$s = new Sphere(35);