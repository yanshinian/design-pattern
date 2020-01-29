<?php

include_once 'Operation.php';
class OperationDiv extends Operation
{
    public function getResult(): float
    {
        return $this->numberA / $this->numberB;
    }
}
