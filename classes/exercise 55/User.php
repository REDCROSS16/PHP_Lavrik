<?php
class User55
{
    private $name;
    private $age;


    public function __get($property)
    {
        if ($property == 'name' || $property == 'age') {
            return $this->$property;
        }
    }


    public function __set($property, $value)
    {
        if ($property == 'name' && $value != '') {
            $this->$property = $value;
        }

        if ($property == 'age' && $value >= 0 && $value <= 70) {
            $this->$property = $value;
        }
    }
}