<?php


class Concrete implements Iterator
{
    private array $array = [
        1,
        2,
        3,
        4
    ];

    /**
     * @inheritDoc
     */
    public function current()
    {
        return current($this->array);
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        return next($this->array);
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return key($this->array);
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return ($this->current() !== false);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        reset($this->array);
    }
}
