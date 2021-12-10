<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Observer\User;
use SON\Observer\UserSubscriber;

try {
    $observer = new UserSubscriber();

    $user = new User();
    $user->attach($observer);
    $user->setEmail('foo@bar.com');

    $user = new User();
    $user->attach($observer);
    //$user->setEmail('foo2@bar.com');

/*
    $user = new User();
    $user->attach($observer);
    $user->setEmail('foo@bar.com');
*/
    var_dump($observer->getChangedUsers());
} catch (Exception $e) {
    echo $e->getMessage();
}
