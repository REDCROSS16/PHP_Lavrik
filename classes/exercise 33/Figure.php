<?php

abstract class Figure
{
    abstract public function getPerimeter();

    abstract public function getSquare();

    public function getRatio()
    {
        return $this->getSquare() / $this->getPerimeter();
    }
}