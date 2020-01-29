<?php


class Product
{
    public array $parts = [];

    public function add(string $part) :void
    {
        $this->parts[] = $part;
    }

    public function show() :void
    {
        print_r('产品 创建 -----'.PHP_EOL);
        foreach ($this->parts as $part) {
            print_r($part.PHP_EOL);
        }
    }
}
