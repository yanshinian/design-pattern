<?php


class Pen
{
    private array $color;

    public function __construct(array $color)
    {
        $this->color = $color;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
