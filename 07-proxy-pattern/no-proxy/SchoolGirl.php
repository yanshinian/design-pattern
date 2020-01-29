<?php


class SchoolGirl
{
    private string $name;
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }
    public function __get($name)
    {
        return $this->$name;
    }
}
