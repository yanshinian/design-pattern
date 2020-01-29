<?php


class Operation
{
    private float $numberA = 0;
    private float $numberB = 0;

    public function __set($name, $val)
    {
        $this->$name = $val;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function getResult():float
    {
    }
}
