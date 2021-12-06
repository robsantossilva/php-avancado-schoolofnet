<?php 

namespace SON\Db\QueryBuilder;

class Sql implements Strategy {

    protected $table;
    protected $select;

    public function table(string $table) : Strategy
    {
        $this->table = $table;
        return $this;

    }

    public function select($columns = '*') : Strategy
    {
        if(is_array($columns)){
            $columns = implode(', ', $columns);
        }
        $this->select = sprintf('SELECT %s FROM %s;', $columns, $this->table);
        return $this;
    }
    
    public function getQuery() : string
    {
        return $this->select;
    }
}