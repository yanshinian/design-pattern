<?php
include_once 'Prototype.php';

class ConcretePrototype1 extends Prototype
{
    public function __construct(string $id)
    {
        parent::__construct($id);
    }

    public function __clone()
    {
        return null;
    }
}
