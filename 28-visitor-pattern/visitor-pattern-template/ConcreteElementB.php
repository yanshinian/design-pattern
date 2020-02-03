<?php


class ConcreteElementB extends Element
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteElementB($this);
    }
}
