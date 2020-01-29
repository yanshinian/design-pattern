<?php
include_once 'Graphics.php';
include_once 'Color.php';
include_once 'Pen.php';

class Program
{
    public static function main() :void
    {
//        $p = new Pen(Color::YELLOW);
//        $gThin = new Graphics();
//        $gThin->drawEllipse($p, 65, 35, 30, 30); // 头
//        $gThin->drawRectangle($p, 60, 50, 70, 100); // 身体
//        $gThin->drawLine($p, 60, 50, 40, 100); // 左手
//        $gThin->drawLine($p, 70, 50, 90, 100); // 右手
//        $gThin->drawLine($p, 60, 100, 45, 150); // 左脚
//        $gThin->drawLine($p, 70, 100, 85, 150); // 右脚
//        $gThin->display();

        $p = new Pen(Color::YELLOW);
        $gFat = new Graphics();
        $gFat->drawEllipse($p, 65, 35, 30, 30); // 头
        $gFat->drawEllipse($p, 65, 75, 40, 50); // 身体
        $gFat->drawLine($p, 50, 50, 30, 100); // 左手
        $gFat->drawLine($p, 80, 50, 100, 100); // 右手
        $gFat->drawLine($p, 60, 100, 45, 150); // 左脚
        $gFat->drawLine($p, 70, 100, 85, 150); // 右脚
        $gFat->display();
    }
}

Program::main();
