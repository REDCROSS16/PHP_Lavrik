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


$product1 = new Product;
$product1->setName('Alex');
$product2 = $product1;
$product2->setName('VAs');

echo $product2->getName();
echo $product1->getName();