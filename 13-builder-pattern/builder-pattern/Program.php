<?php
include_once 'Graphics.php';
include_once 'Color.php';
include_once 'Pen.php';
include_once 'PersonFatBuilder.php';
include_once 'PersonThinBuilder.php';
include_once 'PersonDirector.php';

class Program
{
    public static function main() :void
    {
        $p = new Pen(Color::YELLOW);
        $gThin = new Graphics();
        $ptb = new PersonThinBuilder($gThin, $p);
        $pdThin = new PersonDirector($ptb);
        $pdThin->createPerson();

//        $p = new Pen(Color::YELLOW);
//        $gFat = new Graphics();
//        $pfb = new PersonFatBuilder($gFat, $p);
//        $pdFat = new PersonDirector($pfb);
//        $pdFat->createPerson();
    }
}

Program::main();
