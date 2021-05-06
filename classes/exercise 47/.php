<?php

class Test 
{
    use Trait1, Trait2 {
        Trait1::method insteadOf Trait2;
        Trait2::method as method2;
    }


    
}