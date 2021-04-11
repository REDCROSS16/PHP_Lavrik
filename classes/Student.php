<?php 

require 'User.php';

class Student extends User
{
    private $course;

    public function __construct($name, $age, $course, $surname, $birthday)
    {   
        parent::__construct($name, $surname, $birthday);
        $this->course = $course;
    }

    public function getCourses() {
        return $this->course;
    }
    public function setCourse($course) {
        return $this->course = $course;
    }
    public function addOneYear() {
        return $this->age++;
    }

    public function transetToNextCourse() {
        if ($this->course < 5) {
            $this->course++;
        } else {
            echo 'Учеба закончилась';
        }    
    }
    
    public function getCourse() {
        return $this->course;
    }

    // public function setName($name) {
    //     if (parent::setName($name)  && strlen($name) < 10) {
    //         $this->name = $name;
    //         return $this;
    //     } else {
    //         echo 'неверное имя!';
    //     }
    // }


}