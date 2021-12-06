<?php

use PHPUnit\Framework\TestCase;
use SON\Db\QueryBuilder\Sql;

class SqlTest extends TestCase
{
    public function testSelectQuery(){
        $sql = new Sql;
        $query = $sql->table('users')
            ->select()
            ->getQuery();

        $this->assertEquals('SELECT * FROM users;', $query);
    }

    public function testSelectQueryWithTextColumns(){
        $sql = new Sql;
        $query = $sql->table('users')
            ->select('username, password')
            ->getQuery();

        $this->assertEquals("SELECT username, password FROM users;", $query);
    }

    public function testSelectQueryWithArrayColumns(){
        $sql = new Sql;
        $query = $sql->table('users')
            ->select(['username', 'password'])
            ->getQuery();

        $this->assertEquals("SELECT username, password FROM users;", $query);
    }
}