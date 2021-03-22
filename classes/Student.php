<?php 

class Student 
{
    public $name;
    public $course;

    public function getCourses($course) {
        return $this->course = $course;
    }

    public function transetToNextCourse() {
        if ($this->isCourseCorrect()) {return true;}

        else {
            return false;
        }
    }
    private function isCourseCorrect (){
       if ($this->course < 5) return true;
       else return false;
    }
}