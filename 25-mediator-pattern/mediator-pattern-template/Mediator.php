<?php

include_once 'Colleague.php';

abstract class Mediator
{
    abstract public function send(string $message, Colleague $colleague) :void ;
}
