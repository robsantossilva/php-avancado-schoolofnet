<?php

use PHPUnit\Framework\TestCase;
use SON\Db\Db;

class DbTest extends TestCase
{
    public function testTestInstanceClass(){
        $db = new Db;
        $this->assertInstanceOf(Db::class, $db);
    }
}