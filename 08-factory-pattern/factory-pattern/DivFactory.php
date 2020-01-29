<?php
include_once 'IFactory.php';
include_once 'OperationDiv.php';

class DivFactory implements IFactory
{
    public function createOperation(): Operation
    {
        return new OperationDiv();
    }
}
