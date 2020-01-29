<?php

include_once 'Operation.php';
class OperationMul extends Operation
{
    public function getResult(): float
    {
        return $this->numberA * $this->numberB;
    }
}
