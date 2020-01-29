<?php
include_once 'Operation.php';

class OperationAdd extends Operation
{
    public function getResult(): float
    {
        return $this->numberA + $this->numberB;
    }
}
