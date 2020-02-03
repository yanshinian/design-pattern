<?php

include_once 'ConcreteElementA.php';
include_once 'ConcreteElementB.php';

abstract class Visitor
{
    abstract public function visitConcreteElementA(ConcreteElementA $concreteElementA) :void ;
    abstract public function visitConcreteElementB(ConcreteElementB $concreteElementB) :void ;
}
