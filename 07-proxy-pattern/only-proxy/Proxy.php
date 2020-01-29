<?php

include_once 'SchoolGirl.php';

class Proxy
{
    public SchoolGirl $mm;
    public function __construct(SchoolGirl $mm)
    {
        $this->mm = $mm;
    }


    public function giveDolls() :void
    {
        print_r($this->mm->name.'送你洋娃娃'.PHP_EOL);
    }

    public function giveFlowers() :void
    {
        print_r($this->mm->name.' 送你鲜花'.PHP_EOL);
    }

    public function giveChocolate() :void
    {
        print_r($this->mm->name.' 送你巧克力'.PHP_EOL);
    }
}
