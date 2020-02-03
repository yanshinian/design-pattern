<?php
include_once 'State.php';
include_once 'ForenoonState.php';

class Work
{
    private State $current;
    public function __construct()
    {
        $this->current = new ForenoonState();
    }

    private float $hour;

    /**
     * @param float $hour
     */
    public function setHour(float $hour): void
    {
        $this->hour = $hour;
    }

    /**
     * @return float
     */
    public function getHour(): float
    {
        return $this->hour;
    }

    private bool $finish = false;

    /**
     * @param bool $finish
     */
    public function setFinish(bool $finish): void
    {
        $this->finish = $finish;
    }

    /**
     * @return bool
     */
    public function getFinish(): bool
    {
        return $this->finish;
    }

    public function setState(State $state)
    {
        $this->current = $state;
    }

    public function writeProgram()
    {
        $this->current->writeProgram($this);
    }
}
