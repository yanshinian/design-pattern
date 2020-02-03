<?php

include_once 'IIterator.php';
include_once 'ConcreteAggregate.php';

class ConcreteIteratorDesc extends IIterator
{
    private ConcreteAggregate $aggregate;
    private int $current = 0;

    public function __construct(ConcreteAggregate $aggregate)
    {
        $this->aggregate = $aggregate;
        $this->current = count($aggregate) - 1;
    }

    public function first()
    {
        return $this->aggregate[count($this->aggregate) - 1];
    }

    public function next()
    {
        $ret = null;
        $this->current--;

        if ($this->current >= 0) {
            $ret = $this->aggregate[$this->current];
        }
        return $ret;
    }

    public function isDone(): bool
    {
        return $this->current < 0 ? true : false;
    }

    public function currentItem()
    {
        return $this->aggregate[$this->current];
    }
}
