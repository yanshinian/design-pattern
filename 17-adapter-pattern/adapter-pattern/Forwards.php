<?php
include_once 'Player.php';

class Forwards extends Player
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function attack(): void
    {
        printf('前锋 %s 进攻'.PHP_EOL, $this->name);
    }

    public function defense(): void
    {
        printf('前锋 %s 防守'.PHP_EOL, $this->name);
    }
}
