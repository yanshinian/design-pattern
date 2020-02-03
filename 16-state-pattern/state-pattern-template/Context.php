<?php
include_once 'State.php';

class Context
{
    private State $state;
    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
        print_r('当前状态是:'. get_class($state).PHP_EOL);
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }

    public function request() :void
    {
        $this->state->handle($this);
    }
}
