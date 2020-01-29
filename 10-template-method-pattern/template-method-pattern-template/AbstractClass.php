<?php


abstract class AbstractClass
{
    // 一些抽象的行为 放到子类去实现
    abstract public function primitiveOperation1() :void;
    abstract public function primitiveOperation2() :void;

    // 模板方法，给出了逻辑的骨架，而逻辑的组成是一些。相应的抽象操作，它们都推迟到子类实现
    public function templateMethod() :void
    {
        $this->primitiveOperation1();
        $this->primitiveOperation2();
    }
}
