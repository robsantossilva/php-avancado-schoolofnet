<?php

namespace Robsantossilva\DataMapperOrm\QueryBuilder;

use Robsantossilva\DataMapperOrm\QueryBuilder\Filters\Where;

class Delete implements QueryBuilderInterface
{
    use Where;

    private $query;
    protected $values = [];

    public function __construct(string $table, $conditions = [])
    {
        $this->query = $this->makeSql($table,  $conditions);
    }

    private function makeSql($table,  $conditions)
    {
        $sql = sprintf('DELETE FROM %s', $table);

        if ($conditions) {
            $sql .= $this->makeWhere($conditions);
        }

        return $sql;
    }

    public function getValues(): array
    {
        return $this->values;
    }

    public function __toString()
    {
        return $this->query;
    }
}
