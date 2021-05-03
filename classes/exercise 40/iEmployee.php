<?php

namespace exercise_40;

interface iEmployee extends iUser
{
    public function getSalary();
    public function setsalary($salary);
}