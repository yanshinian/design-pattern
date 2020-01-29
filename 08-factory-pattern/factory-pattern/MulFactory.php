<?php
include_once 'IFactory.php';

class MulFactory implements IFactory
{
    public function createOperation(): Operation
    {
        return new OperationMul();
    }
}
