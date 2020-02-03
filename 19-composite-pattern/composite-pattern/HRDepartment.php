<?php
include_once 'Company.php';

class HRDepartment extends Company
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }


    public function add(Company $c): void
    {
    }

    public function remove(Company $c): void
    {
    }

    public function display(int $depth): void
    {
        print_r(str_pad('-', $depth, '-').$this->name.PHP_EOL);
    }

    public function lineOfDuty(): void
    {
        print_r($this->name.'员工培训管理'.PHP_EOL);
    }
}
