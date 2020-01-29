<?php

include_once 'PersonBuilder.php';

class PersonDirector
{
    private PersonBuilder $pb;

    public function __construct(PersonBuilder $pb)
    {
        $this->pb = $pb;
    }

    public function createPerson() :void
    {
        $this->pb->buildHead();
        $this->pb->buildBody();
        $this->pb->buildArmLeft();
        $this->pb->buildArmRight();
        $this->pb->buildLegLeft();
        $this->pb->buildLegRight();
        $this->pb->display();
    }
}
