<?php
include_once 'IGiveGift.php';
include_once 'Pursuit.php';
include_once 'SchoolGirl.php';

class Proxy implements IGiveGift
{
    public Pursuit $gg;

    public function __construct(SchoolGirl $mm)
    {
        $this->gg = new Pursuit($mm);
    }

    public function giveDolls(): void
    {
        $this->gg->giveDolls();
    }

    public function giveFlowers(): void
    {
        $this->gg->giveFlowers();
    }

    public function giveChocolate(): void
    {
        $this->gg->giveChocolate();
    }
}
