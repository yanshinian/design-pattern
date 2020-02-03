<?php

include_once 'Aggregate.php';
include_once 'ConcreteIterator.php';
class ConcreteAggregate extends Aggregate implements ArrayAccess, Countable
{
    private array $items = [];

    public function createIterator(): IIterator
    {
        return new ConcreteIterator($this);
    }

    public function count() :int
    {
        return count($this->items);
    }

    /**
     * @inheritDoc
     */
    public function offsetExists($offset)
    {
        return isset($this->items);
    }

    /**
     * @inheritDoc
     */
    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        return $this->items[$offset];
    }

    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        $this->items[$offset] = $value;
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }
}
