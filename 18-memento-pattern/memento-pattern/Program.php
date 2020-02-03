<?php

include_once 'GameRole.php';
include_once 'RoleStateCaretaker.php';

class Program
{
    public static function main() :void
    {
        // 大战 Boss 前
        $lixiaoyao = new GameRole();
        $lixiaoyao->getInitState();
        $lixiaoyao->stateDisplay();

        // 保存进度
        $stateAdmin = new RoleStateCaretaker();
        $stateAdmin->setMemento($lixiaoyao->saveState());

        // 大战Boss 时，损耗严重
        $lixiaoyao->fight();
        $lixiaoyao->stateDisplay();

        // 恢复之前状态
        $lixiaoyao->recoveryState($stateAdmin->getMemento());

        $lixiaoyao->stateDisplay();
    }
}

Program::main();
