<?php

class Student 
{
    public $name;
    public $scholarship;

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

}