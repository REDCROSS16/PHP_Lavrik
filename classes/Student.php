<?php 

class Student 
{
    public $name;
    public $course;


    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    public function getCourses($course) {
        return $this->course = $course;
    }

    public function transetToNextCourse() {
        if ($this->course < 5) {
            $this->course++;
        } else {
            echo 'Учеба закончилась';
        }
        
        
    }
    
    public function getName() {
        return $this->name;
    }

    public function getCourse() {
        return $this->course;
    }


}