<?php

class Test2
{
    const CONSTANT = 'test';
    public $name;

    public function getConstant(){
        return self::CONSTANT;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function getVars() {
        return get_class_vars(get_class($this));
    }
}

