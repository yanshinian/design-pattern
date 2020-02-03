<?php

include_once 'Element.php';
include_once 'Visitor.php';

class ObjectStructure
{
    private array $elements = [];

    public function attach(Element $element) :void
    {
        $this->elements[] = $element;
    }

    public function detach(Element $element) :void
    {
        foreach ($this->elements as $key=>$ele) {
            if ($ele === $element) {
                unset($this->elements[$key]);
            }
        }
    }

    public function accept(Visitor $visitor) :void
    {
        foreach ($this->elements as $key=>$ele) {
            $ele->accept($visitor);
        }
    }
}
