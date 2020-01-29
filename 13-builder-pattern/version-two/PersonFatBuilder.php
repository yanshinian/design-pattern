<?php

include_once 'Graphics.php';
include_once 'Pen.php';

class PersonFatBuilder
{
    private Graphics $g;
    private Pen $p;

    public function __construct(Graphics $g, Pen $p)
    {
        $this->g = $g;
        $this->p = $p;
    }

    public function build(): void
    {
        $this->g->drawEllipse($this->p, 65, 35, 30, 30); // 头
        $this->g->drawEllipse($this->p, 65, 75, 40, 50); // 身体
        $this->g->drawLine($this->p, 50, 50, 30, 100); // 左手
        $this->g->drawLine($this->p, 80, 50, 100, 100); // 右手
        $this->g->drawLine($this->p, 60, 100, 45, 150); // 左脚
        $this->g->drawLine($this->p, 70, 100, 85, 150); // 右脚
        $this->g->display();
    }
}
