<?php

include_once 'Person.php';
include_once 'Action.php';

// 对象结构
class ObjectStructure
{
    private array $elements = [];

    // 增加
    public function attach(Person $element) :void
    {
        $this->elements[] = $element;
    }

    // 移除
    public function detach(Person $element) :void
    {
        foreach ($this->elements as $key=>$ele) {
            if ($ele === $element) {
                unset($this->elements[$key]);
            }
        }
    }

    // 查看提示
    public function display(Action $visitor) :void
    {
        foreach ($this->elements as $ele) {
            $ele->accept($visitor);
        }
    }
}
