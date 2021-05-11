<?php

class User53
{
    private $name;
    private $age;
    private $surname;
    private $pathronymic;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return $this->surname . ' ' . $this->name . ' ' . $this->pathronymic;
    }


    /**
     * @return mixed
     */
    public function getPathronymic()
    {
        return $this->pathronymic;
    }

    /**
     * @param mixed $pathronymic
     */
    public function setPathronymic($pathronymic)
    {
        $this->pathronymic = $pathronymic;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

}