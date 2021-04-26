<?php

class Student5 extends User5
{
    private $schoolarship;

    /**
     * @return mixed
     */
    public function getSchoolarship()
    {
        return $this->schoolarship;
    }

    /**
     * @param mixed $schoolarship
     */
    public function setSchoolarship($schoolarship)
    {
        $this->schoolarship = $schoolarship;
    }
}