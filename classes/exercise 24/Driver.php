<?php

require_once 'Employee.php';

class Driver extends Employee
{
    private $category;
    private $experience;
    public $name;

    public function setCategory($category) 
    {
        $arr = ['A', 'B', 'C', 'D'];
        if (in_array($category, $arr)) {
            $this->category = $category;
        }
     
    }

    public function getCategory() {
        return $this->category;
    }

    public function setExperience($experience) {
        $this->experience = $experience;
        return $this;
    }

    public function getExperience() {
        return $this->experience;
    }

}
