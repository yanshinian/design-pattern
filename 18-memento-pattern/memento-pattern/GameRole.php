<?php

include_once 'RoleStateMemento.php';

class GameRole
{
    // 生命力
    private int $vit;

    /**
     * @return int
     */
    public function getVit(): int
    {
        return $this->vit;
    }

    /**
     * @param int $vit
     */
    public function setVit(int $vit): void
    {
        $this->vit = $vit;
    }

    // 攻击力
    private int $atk;

    /**
     * @param int $atk
     */
    public function setAtk(int $atk): void
    {
        $this->atk = $atk;
    }

    /**
     * @return int
     */
    public function getAtk(): int
    {
        return $this->atk;
    }

    // 防御力
    private int $def;

    /**
     * @param int $def
     */
    public function setDef(int $def): void
    {
        $this->def = $def;
    }

    /**
     * @return int
     */
    public function getDef(): int
    {
        return $this->def;
    }

    // 状态显示
    public function stateDisplay() :void
    {
        print_r('角色当前状态:'.PHP_EOL);
        printf('体力: %d '.PHP_EOL, $this->vit);
        printf('攻击力: %d '.PHP_EOL, $this->atk);
        printf('防御力: %d '.PHP_EOL, $this->def);
    }

    // 获得初始状态
    public function getInitState()
    {
        $this->vit = 100;
        $this->atk = 100;
        $this->def = 100;
    }

    // 战斗
    public function fight() :void
    {
        $this->vit = 0;
        $this->atk = 0;
        $this->def = 0;
    }

    // 保存角色状态
    public function saveState() :RoleStateMemento
    {
        return new RoleStateMemento($this->vit, $this->atk, $this->def);
    }

    // 恢复角色状态
    public function recoveryState(RoleStateMemento $memento)
    {
        $this->vit = $memento->getVit();
        $this->atk = $memento->getAtk();
        $this->def = $memento->getDef();
    }
}
