<?php

abstract class User5
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    abstract public function increaseRevenue($value);

    abstract public function decreaseRevenue ($value);
}