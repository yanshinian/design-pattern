<?php
include_once 'Graphics.php';
include_once 'Pen.php';

class PersonThinBuilder
{
    private Graphics $g;
    private Pen $p;

    public function __construct(Graphics $g, Pen $p)
    {
        $this->g = $g;
        $this->p = $p;
    }

    public function build() :void
    {
        $this->g->drawEllipse($this->p, 65, 35, 30, 30); // 头
        $this->g->drawRectangle($this->p, 60, 50, 70, 100); // 身体
        $this->g->drawLine($this->p, 60, 50, 40, 100); // 左手
        $this->g->drawLine($this->p, 70, 50, 90, 100); // 右手
        $this->g->drawLine($this->p, 60, 100, 45, 150); // 左脚
        $this->g->drawLine($this->p, 70, 100, 85, 150); // 右脚
        $this->g->display();
    }
}
