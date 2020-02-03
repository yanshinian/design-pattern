<?php

include_once 'CommonManager.php';
include_once 'Majordomo.php';
include_once 'GeneralManger.php';

class Program
{
    public static function main() :void
    {
        $jingli = new CommonManager('京力');
        $zongjian = new Majordomo('宗剑');
        $zongjingli = new GeneralManger('宗经理');

        $jingli->setSuperior($zongjian);
        $zongjian->setSuperior($zongjingli);

        $request = new Request();
        $request->setRequestType('请假');
        $request->setRequestContent('小菜请假');
        $request->setNumber(1);
        $jingli->requestApplications($request);


        $request2 = new Request();
        $request2->setRequestType('请假');
        $request2->setRequestContent('小菜请假');
        $request2->setNumber(4);
        $jingli->requestApplications($request2);


        $request3 = new Request();
        $request3->setRequestType('加薪');
        $request3->setRequestContent('小菜请求加薪');
        $request3->setNumber(500);
        $jingli->requestApplications($request3);

        $request4 = new Request();
        $request4->setRequestType('加薪');
        $request4->setRequestContent('小菜请求加薪');
        $request4->setNumber(1000);
        $jingli->requestApplications($request4);
    }
}

Program::main();
