<?php
include_once 'Graphics.php';
include_once 'Color.php';
include_once 'Pen.php';
include_once 'PersonFatBuilder.php';
include_once 'PersonThinBuilder.php';

class Program
{
    public static function main() :void
    {
//        $p = new Pen(Color::YELLOW);
//        $gThin = new Graphics();
//        $ptb = new PersonThinBuilder($gThin, $p);
//        $ptb->build();

        $p = new Pen(Color::YELLOW);
        $gFat = new Graphics();
        $pfb = new PersonFatBuilder($gFat, $p);
        $pfb->build();
    }
}

Program::main();
