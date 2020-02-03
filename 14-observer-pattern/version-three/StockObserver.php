<?php
include_once 'Secretary.php';
include_once 'Observer.php';

class StockObserver extends Observer
{
    public function __construct(string $name, Secretary $sub)
    {
        parent::__construct($name, $sub);
    }

    public function update() :void
    {
        print_r(sprintf("%s %s 关闭股票行情, 继续工作! ".PHP_EOL, $this->sub->getState(), $this->name));
    }
}
