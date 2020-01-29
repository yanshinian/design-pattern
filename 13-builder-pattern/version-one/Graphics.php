<?php


class Graphics
{
    private $im;
    private $color;
    public function __construct(int $width = 300, int $height = 300)
    {
        $this->im = imagecreatetruecolor($width, $height);
    }

    public function setPen(Pen $pen)
    {
        [$red, $green, $blue] = $pen->color;
        $this->color = imagecolorallocate($this->im, $red, $green, $blue);
    }
    public function drawEllipse(Pen $pen, int $cx, int $cy, int $width, int $height)
    {
        $this->setPen($pen);
        imageellipse($this->im, $cx, $cy, $width, $height, $this->color);
    }

    public function drawRectangle(Pen $pen, int $x1, int $y1, int $x2, int $y2)
    {
        $this->setPen($pen);
        imagerectangle($this->im, $x1, $y1, $x2, $y2, $this->color);
    }

    public function drawLine(Pen $pen, int $x1, int $y1, int $x2, int $y2)
    {
        $this->setPen($pen);
        imageline($this->im, $x1, $y1, $x2, $y2, $this->color);
    }

    public function display()
    {
        header("content-type:image/png");
        imagepng($this->im);
    }

    public function __destruct()
    {
        imagedestroy($this->im);
    }
}
