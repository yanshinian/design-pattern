<?php

include_once 'WebSite.php';

class Program
{
    public static function main() :void
    {
        $fx = new WebSite('产品展示');
        $fx->use();

        $fy = new WebSite('产品展示');
        $fy->use();

        $fz = new WebSite('产品展示');
        $fz->use();

        $fl = new WebSite('博客');
        $fl->use();

        $fm = new WebSite('博客');
        $fm->use();

        $fn = new WebSite('博客');
        $fn->use();
    }
}

Program::main();
