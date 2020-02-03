<?php

include_once 'Flyweight.php';

class UnshareConcreteFlyweight extends Flyweight
{
    public function operation(int $extrinsicstate)
    {
        print_r('不共享具体 Flyweight：'. $extrinsicstate.PHP_EOL);
    }
}
