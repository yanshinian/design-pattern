<?php
include_once 'IFactory.php';
include_once 'OperationAdd.php';
class AddFactory implements IFactory
{
    public function createOperation(): Operation
    {
        return new OperationAdd();
    }
}
