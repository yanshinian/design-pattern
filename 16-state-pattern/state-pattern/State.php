<?php
include_once 'Work.php';

abstract class State
{
    abstract public function writeProgram(Work $w) :void;
}
