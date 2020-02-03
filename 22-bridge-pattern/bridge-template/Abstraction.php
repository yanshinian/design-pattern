<?php

include_once 'Implementor.php';

class Abstraction
{
    protected Implementor $implementor;

    public function setImplementor(Implementor $implementor) :void
    {
        $this->implementor = $implementor;
    }

    public function operation(): void
    {
        $this->implementor->operation();
    }
}
