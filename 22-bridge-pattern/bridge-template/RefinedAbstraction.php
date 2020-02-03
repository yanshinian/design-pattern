<?php
include_once 'Abstraction.php';

class RefinedAbstraction extends Abstraction
{
    public function operation(): void
    {
        $this->implementor->operation();
    }
}
