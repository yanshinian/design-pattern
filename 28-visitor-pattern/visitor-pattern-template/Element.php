<?php

include_once 'Visitor.php';

abstract class Element
{
    abstract public function accept(Visitor $visitor) :void;
}
