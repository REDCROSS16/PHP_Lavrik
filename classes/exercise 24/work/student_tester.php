<?php

require_once '../Student.php';


$student1 = new Student('Vasya');
echo $student1->getCourse();
echo '<br>';
$student1->transetToNextCourse();
echo '<br>';
echo $student1->getCourse();
echo '<br>';