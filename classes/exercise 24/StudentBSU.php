<?php
require 'Student.php';

class StudentBSU extends Student
{
    private $nationality;

    public function setNationality($nation) 
    {
        $this->nationality = $nation;
        return $this;
    }

    public function getNationality() {
        return $this->nationality;
    }
}
