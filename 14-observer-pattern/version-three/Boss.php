<?php
include_once 'Subject.php';
include_once 'Observer.php';
class Boss implements Subject
{

    // 同事列表
    private array $observers = [];
    private string $action ;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        foreach ($this->observers as $key=>$ob) {
            if ($observer === $ob) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function setState(string $state): void
    {
        $this->action = $state;
    }

    public function getState(): string
    {
        return $this->action;
    }
}
