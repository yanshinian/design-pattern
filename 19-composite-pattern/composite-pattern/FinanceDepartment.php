<?php
include_once 'Company.php';

class FinanceDepartment extends Company
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function add(Company $c): void
    {
        // TODO: Implement add() method.
    }

    public function remove(Company $c): void
    {
        // TODO: Implement remove() method.
    }

    public function display(int $depth): void
    {
        print_r(str_pad('-', $depth, '-').$this->name.PHP_EOL);
    }

    public function lineOfDuty(): void
    {
        print_r($this->name.'公司财务收支管理'.PHP_EOL);
    }
}
