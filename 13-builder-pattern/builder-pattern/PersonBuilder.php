<?php


abstract class PersonBuilder
{
    protected Graphics $g;
    protected Pen $p;

    public function __construct(Graphics $g, Pen $p)
    {
        $this->g = $g;
        $this->p = $p;
    }

    abstract public function buildHead() :void;
    abstract public function buildBody() :void;
    abstract public function buildArmLeft() :void;
    abstract public function buildArmRight() :void;
    abstract public function buildLegLeft() :void;
    abstract public function buildLegRight() :void;
    abstract public function display() :void;
}
