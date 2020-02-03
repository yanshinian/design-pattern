<?php
include_once 'Manager.php';
include_once 'Request.php';

class Program
{
    public static function main() :void
    {
        $jingli = new Manager('京力');
        $zongjian = new Manager('宗剑');
        $zongjingli = new Manager('宗经理');

        $request = new Request();
        $request->setRequestType('加薪');
        $request->setRequestContent('小菜请求加薪');
        $request->setNumber(1000);

        $jingli->getResult('经理', $request);
        $zongjian->getResult('总监', $request);
        $zongjingli->getResult('总经理', $request);

        $request2 = new Request();
        $request2->setRequestType('请假');
        $request2->setRequestContent('小菜请假');
        $request2->setNumber(3);

        $jingli->getResult('经理', $request2);
        $zongjian->getResult('总监', $request2);
        $zongjingli->getResult('总经理', $request2);
    }
}

Program::main();
