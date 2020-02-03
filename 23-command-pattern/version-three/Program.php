<?php
include_once 'Barbecuer.php';
include_once 'Waiter.php';
include_once 'BakeChickenWingCommand.php';
include_once 'BakeMuttonCommand.php';

class Program
{
    public static function main() :void
    {
        // 开店前的准备
        $boy = new Barbecuer();
        $bakeMuttonCommand1 = new BakeMuttonCommand($boy);
        $bakeMuttonCommand2 = new BakeMuttonCommand($boy);
        $bakeChickenWingCommand1 = new BakeChickenWingCommand($boy);
        $girl = new Waiter();

        // 开门营业
        $girl->setOrder($bakeMuttonCommand1);
        $girl->notify();

        $girl->setOrder($bakeMuttonCommand2);
        $girl->notify();

        $girl->setOrder($bakeChickenWingCommand1);
        $girl->notify();
    }
}

Program::main();
