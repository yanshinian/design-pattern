<?php

include_once 'Secretary.php';
include_once 'Subject.php';

abstract class Observer
{
    protected string $name;
    protected Subject $sub;

    public function __construct(string $name, Subject $sub)
    {
        $this->name = $name;
        $this->sub = $sub;
    }

    abstract public function update() :void;
}
