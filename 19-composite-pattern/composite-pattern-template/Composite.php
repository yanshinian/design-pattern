<?php
include_once 'Component.php';

class Composite extends Component
{
    private array $children = [];

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function add(Component $c): void
    {
        $this->children[] = $c;
    }

    public function remove(Component $c): void
    {
        foreach ($this->children as $k=>$child) {
            if ($c === $child) {
                unset($this->children[$k]);
            }
        }
    }

    public function display(int $depth): void
    {
        print_r(str_pad('-', $depth, '-').$this->name.PHP_EOL);

        foreach ($this->children as $component) {
            $component->display($depth+2);
        }
    }
}
