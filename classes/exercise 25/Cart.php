<?php
require_once 'Product.php';


class Cart 
{
    private $products;

    public function add ($product) 
    {
        $this->products[] = $product;
    }

    public function remove ($name) {
        $n = 0;
        foreach ($this->products as $product) 
        {
            if ($name == $product->getName())
            {
                unset($this->products[$n]);
                sort($this->products);
            }
            $n++;
        }
        return $this->products;
    }

    public function getInfo ()
    {
        return $this->products;
    }

    public function getTotalCost () {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getCost();
        }
        return $sum;
    }

    public function getTotalQuantity(){
        $sum = 0;
        foreach ($this->products as $product) {
            $sum+= $product->getQuantity();
        }
        return $sum;
    }

    public function getAvgPrice() {
        $count = count($this->products);
        $cost = $this->getTotalCost();
        return $cost/$count;
    }
}


$cart = new Cart;

$cart->add(new Product('Греча', 1000, 2));
$cart->add(new Product('Рис', 1000, 2));
$cart->add(new Product('Просо', 1000, 2));
$cart->add(new Product('Пшено', 1000, 2));

echo '<pre>';
print_r( $cart->getInfo());
echo '</pre>';

$cart->remove('Греча');
// $cart->remove('Рис');
// $cart->remove('Просо');

echo '<pre>';
print_r( $cart->getInfo());
echo '</pre>';

echo 'Цена всех продуктов: ' . $cart->getTotalCost(); 
echo '<br>';
echo 'Количество продуктов: ' . $cart->getTotalQuantity();
echo '<br>';
echo 'Средняя стоимость: ' . $cart->getAvgPrice();