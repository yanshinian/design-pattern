<?php


abstract class Handler
{
    protected Handler $successor;

    /**
     * @param Handler $successor
     */
    public function setSuccessor(Handler $successor): void
    {
        $this->successor = $successor;
    }

    abstract public function handleRequest(int $request) :void ;
}
