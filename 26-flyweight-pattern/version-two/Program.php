<?php

include_once 'WebSiteFactory.php';

class Program
{
    public static function main() :void
    {
        $factory = new WebSiteFactory();

        $fx = $factory->getWebSiteCategory('产品展示');
        $fx->use();

        $fy = $factory->getWebSiteCategory('产品展示');
        $fy->use();

        $fa = $factory->getWebSiteCategory('博客');
        $fa->use();

        $fb = $factory->getWebSiteCategory('博客');
        $fb->use();

        print_r('网站分类总数为  ：'.$factory->getWebSiteCount().PHP_EOL);
    }
}

Program::main();
