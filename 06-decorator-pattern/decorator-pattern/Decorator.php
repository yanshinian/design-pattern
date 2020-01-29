<?php
include_once 'Component.php';

class Decorator extends Component
{
    protected ?Component $component = null;

    public function setComponent(Component $component) :void
    {
        $this->component = $component;
    }
    public function operation() :void
    {
        if ($this->component != null) {
            $this->component->operation();
        }
    }
}
