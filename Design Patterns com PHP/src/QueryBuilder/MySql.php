<?php 

namespace SON\Db\QueryBuilder;

class MySql implements Strategy {
    public function table(string $table) : Strategy
    {
        $this->table = '`'.$table.'`';
        return $this;

    }

    public function select($columns = '*') : Strategy
    {
        if($columns != '*' and is_string($columns)){
            $columns = explode(',', $columns);
            $columns = array_map('trim', $columns);
        }

        if(is_array($columns)){
            $columns = implode('`, `', $columns);
            $columns = '`'.$columns.'`';
        }
        $this->select = sprintf('SELECT %s FROM %s;', $columns, $this->table);
        return $this;
    }

    public function getQuery() : string
    {
        return $this->select;
    }
}