<?php

include_once 'Secretary.php';

abstract class Observer
{
    protected string $name;
    protected Secretary $sub;

    public function __construct(string $name, Secretary $sub)
    {
        $this->name = $name;
        $this->sub = $sub;
    }

    abstract public function update() :void;
}
