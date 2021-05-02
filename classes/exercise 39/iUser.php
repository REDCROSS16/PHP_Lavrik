<?php

namespace exercise_39;

interface iUser
{
    public function __construct($name, $age);
    public function getAge();
    public function getName();
}