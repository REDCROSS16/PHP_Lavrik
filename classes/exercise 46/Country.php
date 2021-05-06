<?php

require_once 'Helper.php';

class Country 
{
    use Helper;

    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }
}


$vitebsk = new Country('Vitebsk', 1200, 350000);


echo $vitebsk->setName('Homel')->getName();
echo $vitebsk->getPopulation();