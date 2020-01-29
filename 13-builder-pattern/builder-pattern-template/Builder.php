<?php

include_once 'Product.php';

abstract class Builder
{
    abstract public function buildPartA() :void;
    abstract public function buildPartB() :void;
    abstract public function getResult() :Product;
}
