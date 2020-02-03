<?php
include_once 'Observer.php';

abstract class Subject
{
    private array $observers = [];

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        foreach ($this->observers as $k => $ob) {
            if ($ob === $observer) {
                unset($this->observers[$k]);
            }
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $ob) {
            $ob->update();
        }
    }
}
