<?php

namespace SON\Observer;

abstract class Publisher implements \SplSubject
{
    private $subscriber;

    public function __construct()
    {
        $this->subscriber = new \SplObjectStorage();
    }

    public function attach(\SplObserver $subscriber)
    {
        $this->subscriber->attach($subscriber);
    }

    public function detach(\SplObserver $subscriber)
    {
        $this->subscriber->detach($subscriber);
    }

    public function notify()
    {
        foreach ($this->subscriber as $subscriber) {
            $subscriber->update($this);
        }
    }
}
