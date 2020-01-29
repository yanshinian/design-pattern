<?php


class Person
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show()
    {
        print_r('装扮的'. $this->name.PHP_EOL);
    }
}
