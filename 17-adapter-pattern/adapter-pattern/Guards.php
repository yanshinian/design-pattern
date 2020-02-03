<?php

include_once 'Player.php';

class Guards extends Player
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function attack(): void
    {
        printf('后卫 %s 进攻'.PHP_EOL, $this->name);
    }

    public function defense(): void
    {
        printf('后卫 %s 防守'.PHP_EOL, $this->name);
    }
}
