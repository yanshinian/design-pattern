<?php

include_once 'Operation.php';

class OperationSub extends Operation
{
    public function getResult(): float
    {
        return $this->numberA - $this->numberB;
    }
}
