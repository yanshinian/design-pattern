<?php
include_once 'Builder.php';

class ConcreteBuilder2 extends Builder
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA(): void
    {
        $this->product->add('部件X');
    }

    public function buildPartB(): void
    {
        $this->product->add('部件Y');
    }

    public function getResult(): Product
    {
        return $this->product;
    }
}
