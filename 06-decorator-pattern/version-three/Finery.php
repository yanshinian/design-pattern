<?php
include_once 'Person.php';

class Finery extends Person
{
    protected Person $component;

    public function decorate(Person $component)
    {
        $this->component = $component;
    }

    public function show()
    {
        if ($this->component != null) {
            $this->component->show();
        }
    }
}
