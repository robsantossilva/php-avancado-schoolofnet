<?php 

namespace SON\Builder;

class Director
{
    private $builder;
    public function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function getQuery($table)
    {
        $this->builder->setTable($table);
        $this->builder->setQuery();
        return $this->builder->getResult();
    }
}