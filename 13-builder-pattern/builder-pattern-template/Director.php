<?php
include_once 'Builder.php';

class Director
{
    public function setBuilder(Builder $builder)
    {
        $builder->buildPartA();
        $builder->buildPartB();
    }
}
