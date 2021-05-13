<?php

class Test55
{
    private $prop1;
    private $prop2;

    public function __set($property, $value)
    {
        # массив свойств
        $properties = ['prop1', 'prop2', 'prop3'];
        if (in_array($property, $properties)) {
            $this->$property = $value;
        }
        # если небольшое количество свойств
//        if ($property == 'prop1' || $property == 'prop2') {
//            $this->$property = $value;
//        }

        switch ($property) {
            case 'prop1':
                if ($value > 0 && $value < 10) {
                    $this->$property = $value;
                }
            break;
            case 'prop2':
                if ($value > 10 && $value < 20) {
                    $this->$property = $value;
                }
            break;
            default:
            break;
        }

    }

    public function __get($property)
    {
        return $this->$property;
    }
}