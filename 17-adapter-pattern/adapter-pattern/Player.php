<?php


abstract class Player
{
    protected string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function attack() :void;
    abstract public function defense() :void;
}
