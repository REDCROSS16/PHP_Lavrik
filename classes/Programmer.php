<?php

require 'Employee.php';

class Programmer extends Employee 
{
    private $langs;


    public function setLangs($lang){
        $this->langs = $lang;
        return $this;
    }

    public function getLangs() {
        return $this->langs;
    }
}