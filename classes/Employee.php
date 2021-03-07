<?


/**
 * Класс работника
 *  */ 

class Employee 
{
    public $name;
    public $age;
    public $salary;

    public function getName() {
        $name = $this->name;
        return $name;
    }

    public function getAge() {
        $age = $this->age;
        return $age;
    }

    public function getSalary() {
        $salary = $this->salary;
        return $salary;
    }

    public function checkAge () {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
    public function setName ($name) {
        $this->name = $name;
    }

    public function doubleSalary () {
        $dblSalary = $this->getSalary() * 2;
        return $dblSalary;
    }
}

$worker1 = new Employee;
$worker2 = new Employee;

$worker1->age = 17;
$worker2->age = 30;

$worker1->salary = 3000;
$worker2->salary = 5000;

$worker1->name = 'RED';
$worker2->name = 'Cross';



echo ($worker1->checkAge());

$worker1->setName('Alexander');
$worker2->setName('Vladimir');
?>

<table style='border:solid 1px black'>
        <td> <?=$worker1->name;?> </td>
        <td> <?=$worker2->name;?> </td>
        <td> Сумма</td>
    </tr>
    <tr>
        <td> <?=$worker1->age;?></td>
        <td> <?=$worker2->age;?></td>
    </tr>
    <tr>
        <td><?=$worker1->getSalary();?></td>
        <td><?=$worker2->getSalary();?></td>
        <td><?=$worker2->getSalary()+$worker1->getSalary();?></td>
    </tr>
    <tr>
        <td><?=$worker1->doubleSalary()?></td>
        <td><?=$worker2->doubleSalary()?></td>
    </tr>


</table>