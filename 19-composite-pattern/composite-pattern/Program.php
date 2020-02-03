<?php
include_once 'ConcreteCompany.php';
include_once 'HRDepartment.php';
include_once 'FinanceDepartment.php';

class Program
{
    public static function main() :void
    {
        $root = new ConcreteCompany('北京总公司');
        $root->add(new HRDepartment('总公司人力资源部'));
        $root->add(new FinanceDepartment('总公司财务部'));

        $comp = new ConcreteCompany('上海华东分公司');
        $comp->add(new HRDepartment('华东分公司人力资源部'));
        $comp->add(new FinanceDepartment('华东分公司财务部'));

        $root->add($comp);

        $comp1 = new ConcreteCompany('南京办事处');
        $comp1->add(new HRDepartment('南京办事处人力资源部'));
        $comp1->add(new FinanceDepartment('南京办事处财务部'));
        $comp->add($comp1);

        $comp2 = new ConcreteCompany('杭州办事处');
        $comp2->add(new HRDepartment('杭州办事处人力资源部'));
        $comp2->add(new FinanceDepartment('杭州办事处财务部'));
        $comp->add($comp2);

        print_r('结构图:'.PHP_EOL);
        $root->display(1);

        print_r('职责：'.PHP_EOL);
        $root->lineOfDuty();
    }
}

Program::main();
