<?php

include_once 'Company.php';

class ConcreteCompany extends Company
{
    private array $children = [];

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function add(Company $c): void
    {
        $this->children[] = $c;
    }

    public function remove(Company $c): void
    {
        foreach ($this->children as $key=>$company) {
            if ($company === $c) {
                unset($this->children[$key]);
            }
        }
    }

    public function display(int $depth): void
    {
        print_r(str_pad('-', $depth, '-').$this->name.PHP_EOL);

        foreach ($this->children as $company) {
            $company->display($depth+2);
        }
    }

    public function lineOfDuty(): void
    {
        foreach ($this->children as $company) {
            $company->lineOfDuty();
        }
    }
}
