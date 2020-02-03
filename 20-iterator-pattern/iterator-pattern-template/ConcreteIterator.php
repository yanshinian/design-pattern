<?php
include_once 'IIterator.php';

class ConcreteIterator extends IIterator
{
    private ConcreteAggregate $aggregate;
    private int $current = 0;

    public function __construct(ConcreteAggregate $aggregate)
    {
        $this->aggregate = $aggregate;
    }

    public function first()
    {
        return $this->aggregate[0];
    }

    public function next()
    {
        $ret = null;
        $this->current++;
        if ($this->current < count($this->aggregate)) {
            $ret = $this->aggregate[$this->current];
        }
        return $ret;
    }

    public function isDone(): bool
    {
        return $this->current >= count($this->aggregate) ? true : false;
    }

    public function currentItem()
    {
        return $this->aggregate[$this->current];
    }
}
