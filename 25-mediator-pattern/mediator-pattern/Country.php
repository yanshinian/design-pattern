<?php

include_once 'UnitedNations.php';

// 国家
abstract class Country
{
    protected UnitedNations $mediator;

    public function __construct(UnitedNations $mediator)
    {
        $this->mediator = $mediator;
    }
}
