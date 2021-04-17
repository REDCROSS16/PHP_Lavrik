<?php 
/**
 * Класс продукта
 */
class Product 
{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }


    public function getCost () 
    {
        return $this->price * $this->quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQuantity () 
    {
        return $this->quantity;
    }
}