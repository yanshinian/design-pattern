<?php

include_once 'ConcreteFlyweight.php';

class FlyweightFactory
{
    private array $flyweights = [];

    public function __construct()
    {
        $this->flyweights['X'] = new ConcreteFlyweight();
        $this->flyweights['Y'] = new ConcreteFlyweight();
        $this->flyweights['Z'] = new ConcreteFlyweight();
    }

    public function getFlyWeight(string $key)
    {
        return $this->flyweights[$key];
    }
}
