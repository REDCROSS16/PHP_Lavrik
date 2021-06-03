<?php

require_once '../City.php';

$cities = [
    $city1 = new City('Vitebsk', 350000),
    $city2 = new City('Gomel', 550000),
    $city3 = new City('Minsk', 1150000),
];

foreach ($cities as $city) {
    echo '<br>';
    echo 'Город ' . $city->name . '<br>';
    echo 'Население ' . $city->population . '<br>';
}



$city14 = new City('city14', 200000);
$city14->foundation = 1947 . ' year';
$props = ['name', 'population', 'foundation'];

echo '<br>---------------------------<br>';
foreach ($props as $item) {
    echo "$item : " . $city14->$item;
    echo '<br>'; 
}
echo '---------------------------';