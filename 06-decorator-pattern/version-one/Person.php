<?php


class Person
{
    private string $name;

    public static function main()
    {
        $xc = new Person1('小菜');
        print_r('第一种装扮'.PHP_EOL);

        $xc->wearTshirts();
        $xc->wearBigTrouser();
        $xc->wearSneakers();
        $xc->show();

        print_r('第二种打扮'.PHP_EOL);

        $xc->wearSuit();
        $xc->wearTie();
        $xc->wearLeatherShoes();
        $xc->show();
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function wearTshirts()
    {
        print_r('大T恤'.PHP_EOL);
    }

    public function wearBigTrouser()
    {
        print_r('垮裤'.PHP_EOL);
    }

    public function wearSneakers()
    {
        print_r('破球鞋'.PHP_EOL);
    }

    public function wearSuit()
    {
        print_r('西装'.PHP_EOL);
    }

    public function wearTie()
    {
        print_r('领带'.PHP_EOL);
    }

    public function wearLeatherShoes()
    {
        print_r('皮鞋'.PHP_EOL);
    }

    public function show()
    {
        print_r('装扮的'. $this->name.PHP_EOL);
    }
}

Person::main();
