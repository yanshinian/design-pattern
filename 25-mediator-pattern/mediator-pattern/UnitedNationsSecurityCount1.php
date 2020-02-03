<?php

include_once 'UnitedNations.php';
include_once 'USA.php';
include_once 'Iraq.php';

// 联合国安全理事会
class UnitedNationsSecurityCount1 extends UnitedNations
{
    private USA $colleague1;
    private Iraq $colleague2;

    /**
     * @param USA $colleague1
     */
    public function setColleague1(USA $colleague1): void
    {
        $this->colleague1 = $colleague1;
    }

    /**
     * @param Iraq $colleague2
     */
    public function setColleague2(Iraq $colleague2): void
    {
        $this->colleague2 = $colleague2;
    }

    // 声明
    public function declare(string $message, Country $colleague): void
    {
        if ($colleague === $this->colleague1) {
            $this->colleague2->getMessage($message);
        } else {
            $this->colleague1->getMessage($message);
        }
    }
}
