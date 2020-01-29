<?php


abstract class Prototype
{
    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
