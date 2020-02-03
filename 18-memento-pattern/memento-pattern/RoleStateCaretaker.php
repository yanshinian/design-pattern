<?php

include_once 'RoleStateCaretaker.php';

// 角色状态管理者
class RoleStateCaretaker
{
    private RoleStateMemento $memento;

    /**
     * @param RoleStateMemento $memento
     */
    public function setMemento(RoleStateMemento $memento): void
    {
        $this->memento = $memento;
    }

    /**
     * @return RoleStateMemento
     */
    public function getMemento(): RoleStateMemento
    {
        return $this->memento;
    }
}
