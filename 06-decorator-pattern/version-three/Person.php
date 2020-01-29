<?php


class Person
{
    public string $name;
    public function __construct()
    {
        $argv = func_get_args();
        switch (func_num_args()) {
            case 1:
                self::__construct1($argv[0]);
                break;
        }
    }

    public function __construct1($name)
    {
        $this->name = $name;
    }
    public function show()
    {
        print_r('装扮的'. $this->name.PHP_EOL);
    }
}
