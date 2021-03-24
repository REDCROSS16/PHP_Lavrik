<?


/**
 * Класс работника
 *  */ 

class Employee 
{
    private $name;
    private $age;
    private $salary;

    function __construct ($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

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
        return $salary . '$';
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
    public function setAge($age) {
        if ($this->isAgeCorrect($age))
        $this->age = $age;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function doubleSalary () {
        $dblSalary = $this->getSalary() * 2;
        return $dblSalary;
    }
    
    private function isAgeCorrect($age) {
        return $age > 20 && $age < 100;
    }
}