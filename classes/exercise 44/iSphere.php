<?php

interface iSphere 
{
    const PI = 3.14;

    public function __construct($radius);
    public function getVolume();
    public function getSquare();
}