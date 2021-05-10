<?php
require_once 'Trait512.php';
class Test51
{
    use Trait512;
    private $sum;

    public function setSum($sum) {
        $this->sum += $sum;
        return $this;
    }
    public function showSum() {
        return $this->sum;
    }

    public function getSum(): int {

        return $this->methodA() + $this->methodB();
    }
}



$A = new Test51;
$i = 0;
while($i < 10) {
    $sum = $A->getSum();
    $A->setSum($sum);
    echo $A->showSum();
    echo '<br>';
    // sleep(1);
    $i++;
}


echo trait_exists('Trait51');
echo trait_exists('Trait2');

echo '<pre>';
echo 'Cписок трейтов :';
print_r( get_declared_traits());
echo '</pre>';