<?php


abstract class Component
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function add(Component $c) :void;
    abstract public function remove(Component $c) :void;
    abstract public function display(int $depth) :void;
}
