<?php

include_once 'Builder.php';
include_once 'Product.php';
class ConcreteBuilder1 extends Builder
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA(): void
    {
        $this->product->add('部件A');
    }

    public function buildPartB(): void
    {
        $this->product->add('部件B');
    }

    public function getResult(): Product
    {
        return $this->product;
    }
}
