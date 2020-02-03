<?php

include_once 'FlyweightFactory.php';
include_once 'UnshareConcreteFlyweight.php';

class Program
{
    public static function main() :void
    {
        $extrinsicstate = 22;
        $f = new FlyweightFactory();

        $fx = $f->getFlyWeight('X');
        $fx->operation(--$extrinsicstate);

        $fy = $f->getFlyWeight('Z');
        $fy->operation(--$extrinsicstate);

        $fz = $f->getFlyWeight('Z');
        $fz->operation(--$extrinsicstate);

        $uf = new UnshareConcreteFlyweight();
        $uf->operation(--$extrinsicstate);
    }
}

Program::main();
