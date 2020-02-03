<?php

include_once 'Flyweight.php';

class ConcreteFlyweight extends Flyweight
{
    public function operation(int $extrinsicstate)
    {
        print_r('具体Flyweight：'.$extrinsicstate.PHP_EOL);
    }
}
