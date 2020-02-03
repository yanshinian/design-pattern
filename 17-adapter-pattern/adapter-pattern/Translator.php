<?php
include_once 'Player.php';
include_once 'ForeignCenter.php';

class Translator extends Player
{
    private ForeignCenter $wjzf ;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->wjzf = new ForeignCenter();
        $this->wjzf->setName($name);
    }

    public function attack(): void
    {
        $this->wjzf->attack();
    }

    public function defense(): void
    {
        $this->wjzf->defense();
    }
}
