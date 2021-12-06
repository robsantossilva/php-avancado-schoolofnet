<?php

namespace SON\Db\Builder;

use SON\Db\QueryBuilder\Sql;
use SON\Db\QueryBuilder\Strategy;

class BuilderAbstract implements BuilderInterface
{
    protected $query;

    public function __construct(Strategy $strategy)
    {
        $this->query = $strategy;
    }

    public function setTable(string $table)
    {
        $this->query->table($table);
    }
    
    public function getSqlAll():string
    {
        return $this->query
            ->select()
            ->getQuery();
    }
}