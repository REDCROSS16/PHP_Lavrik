<?php

class City 
{
    public $name;
    public $population; 
    public $foundation;

    function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}