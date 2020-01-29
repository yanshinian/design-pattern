<?php
include_once 'IFactory.php';
include_once 'OperationSub.php';

class SubFactory implements IFactory
{
    public function createOperation(): Operation
    {
        return new OperationSub();
    }
}
