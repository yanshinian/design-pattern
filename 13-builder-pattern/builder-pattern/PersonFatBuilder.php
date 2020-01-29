<?php

include_once 'PersonBuilder.php';
include_once 'Graphics.php';
include_once 'Pen.php';

class PersonFatBuilder extends PersonBuilder
{
    public function __construct(Graphics $g, Pen $p)
    {
        parent::__construct($g, $p);
    }

    public function buildHead(): void
    {
        $this->g->drawEllipse($this->p, 65, 35, 30, 30); // 头
    }

    public function buildBody(): void
    {
        $this->g->drawEllipse($this->p, 65, 75, 40, 50); // 身体
    }

    public function buildArmLeft(): void
    {
        $this->g->drawLine($this->p, 50, 50, 30, 100); // 左手
    }

    public function buildArmRight(): void
    {
        $this->g->drawLine($this->p, 80, 50, 100, 100); // 右手
    }

    public function buildLegLeft(): void
    {
        $this->g->drawLine($this->p, 60, 100, 45, 150); // 左脚
    }

    public function buildLegRight(): void
    {
        $this->g->drawLine($this->p, 70, 100, 85, 150); // 右脚
    }

    public function display() :void
    {
        $this->g->display();
    }
}
