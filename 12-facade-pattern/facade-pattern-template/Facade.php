<?php
include_once 'SubSystemOne.php';
include_once 'SubSystemTwo.php';
include_once 'SubSystemThree.php';
include_once 'SubSystemFour.php';

class Facade
{
    public SubSystemOne $one;
    public SubSystemTwo $two;
    public SubSystemThree $three;
    public SubSystemFour $four;

    public function __construct()
    {
        $this->one = new SubSystemOne();
        $this->two = new SubSystemTwo();
        $this->three = new SubSystemThree();
        $this->four = new SubSystemFour();
    }

    public function methodA() :void
    {
        print_r('方法组 A() ---'.PHP_EOL);
        $this->one->methodOne();
        $this->two->methodTwo();
        $this->four->methodFour();
    }

    public function methodB() :void
    {
        print_r('方法组 B() ----'.PHP_EOL);
        $this->two->methodTwo();
        $this->three->methodThree();
    }
}
