<?php 

class Product
{
    private $price;
    private $name;

    public function setName($name){
        return $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

}