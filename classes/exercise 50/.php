<?php

trait Trait50
{
    public function method50() : int
    {
        return 1;
    }

    abstract public function method2();
    # абстрактные могут быть паблик протектед но не ПРИВАТ!!!!
}


class Test50 {
    use Trait50;

    public function method2()
    {

    }
}
