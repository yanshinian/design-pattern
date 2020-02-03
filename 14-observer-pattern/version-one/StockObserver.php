<?php
include_once 'Secretary.php';

class StockObserver
{
    private string $name;
    private Secretary $sub;

    public function __construct(string $name, Secretary $sub)
    {
        $this->name = $name;
        $this->sub = $sub;
    }

    public function update() :void
    {
        print_r(sprintf("%s %s 关闭股票行情, 继续工作! ".PHP_EOL, $this->sub->getAction(), $this->name));
    }
}
