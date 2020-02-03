<?php
include_once 'Component.php';

class Leaf extends Component
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function add(Component $c): void
    {
        print_r('Cannot add to to a leaf'.PHP_EOL);
    }

    public function remove(Component $c): void
    {
        print_r('Cannot remove to to a leaf'.PHP_EOL);
    }

    public function display(int $depth): void
    {
        print_r(str_pad('-', $depth, '-').$this->name.PHP_EOL);
    }
}
