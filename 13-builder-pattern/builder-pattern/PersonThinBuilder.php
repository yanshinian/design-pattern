<?php
include_once 'PersonBuilder.php';
include_once 'Graphics.php';
include_once 'Pen.php';

class PersonThinBuilder extends PersonBuilder
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
        $this->g->drawRectangle($this->p, 60, 50, 70, 100); // 身体
    }

    public function buildArmLeft(): void
    {
        $this->g->drawLine($this->p, 60, 50, 40, 100); // 左手
    }

    public function buildArmRight(): void
    {
        $this->g->drawLine($this->p, 70, 50, 90, 100); // 右手
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
