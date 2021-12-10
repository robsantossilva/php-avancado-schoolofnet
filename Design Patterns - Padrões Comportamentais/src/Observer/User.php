<?php

namespace SON\Observer;

class User extends Publisher
{
    private $email;

    public function setEmail($email)
    {
        $this->email = $email;
        $this->notify();
    }
    public function getEmail()
    {
        return $this->email;
    }
}
