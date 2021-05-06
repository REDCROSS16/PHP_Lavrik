<?php

trait Helper 
{
    private $name;
    private $age;
    private $population;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
        return $this;
    }
    public function getPopulation(){
        return $this->population;
    }
    public function setPopulation($population){
        $this->population = $population;
        return $this;
    }
}