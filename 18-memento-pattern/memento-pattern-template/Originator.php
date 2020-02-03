<?php

include_once 'Memento.php';

class Originator
{
    private string $state;

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    public function createMemento()
    {
        return new Memento($this->state);
    }

    public function setMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }

    public function show() :void
    {
        print_r('State='.$this->state.PHP_EOL);
    }
}
