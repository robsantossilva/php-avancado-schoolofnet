<?php

namespace SON\Db\Builder;

use SON\Db\QueryBuilder\Strategy;

interface BuilderInterface
{
    public function __construct(Strategy $strategy);
    public function setTable(string $table);
    public function getSqlAll():string;
}