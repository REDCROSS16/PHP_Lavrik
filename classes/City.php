<?php

class City 
{
    public $name;
    public $population; 

    function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}