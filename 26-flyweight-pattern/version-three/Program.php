<?php

include_once 'WebSiteFactory.php';
include_once 'User.php';

class Program
{
    public static function main() :void
    {
        $factory = new WebSiteFactory();

        $fx = $factory->getWebSiteCategory('产品展示');
        $fx->use(new User('野原新之助'));

        $fy = $factory->getWebSiteCategory('产品展示');
        $fy->use(new User('风间'));

        $fa = $factory->getWebSiteCategory('博客');
        $fa->use(new User('多啦A梦'));

        $fb = $factory->getWebSiteCategory('博客');
        $fb->use(new User('大熊'));

        print_r('网站分类总数为  ：'.$factory->getWebSiteCount().PHP_EOL);
    }
}

Program::main();
