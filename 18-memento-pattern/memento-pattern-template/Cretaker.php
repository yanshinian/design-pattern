<?php
include_once 'Memento.php';

class Cretaker
{
    private Memento $memento;

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento): void
    {
        $this->memento = $memento;
    }

    /**
     * @return Memento
     */
    public function getMemento(): Memento
    {
        return $this->memento;
    }
}
