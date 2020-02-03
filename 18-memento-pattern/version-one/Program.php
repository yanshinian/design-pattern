<?php

include_once 'GameRole.php';

class Program
{
    public static function main() :void
    {
        // 大战 Boss 前
        $lixiaoyao = new GameRole();
        $lixiaoyao->getInitState();
        $lixiaoyao->stateDisplay();

        // 保存进度
        $backup = new GameRole();
        $backup->setVit($lixiaoyao->getVit());
        $backup->setAtk($lixiaoyao->getAtk());
        $backup->setDef($lixiaoyao->getDef());

        // 大战Boss 时，损耗严重
        $lixiaoyao->fight();
        $lixiaoyao->stateDisplay();

        // 恢复之前状态
        $lixiaoyao->setVit($backup->getVit());
        $lixiaoyao->setAtk($backup->getAtk());
        $lixiaoyao->setDef($backup->getDef());

        $lixiaoyao->stateDisplay();
    }
}

Program::main();
