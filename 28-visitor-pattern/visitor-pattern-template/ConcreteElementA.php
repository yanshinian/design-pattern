<?php

include_once 'Element.php';

class ConcreteElementA extends Element
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteElementA($this);
    }
}
