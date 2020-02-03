<?php

// 角色状态存储
class RoleStateMemento
{
    private int $vit;
    private int $atk;
    private int $def;

    public function __construct(int $vit, int $atk, int $def)
    {
        $this->vit = $vit;
        $this->atk = $atk;
        $this->def = $def;
    }

    // 生命力

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

    /**
     * @return int
     */
    public function getAtk(): int
    {
        return $this->atk;
    }

    // 攻击力
    /**
     * @param int $atk
     */
    public function setAtk(int $atk): void
    {
        $this->atk = $atk;
    }

    // 防御力

    /**
     * @return int
     */
    public function getDef(): int
    {
        return $this->def;
    }

    /**
     * @param int $def
     */
    public function setDef(int $def): void
    {
        $this->def = $def;
    }
}
