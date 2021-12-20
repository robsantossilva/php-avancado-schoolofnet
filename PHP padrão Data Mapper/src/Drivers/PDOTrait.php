<?php

namespace Robsantossilva\DataMapperOrm\Drivers;

use Robsantossilva\DataMapperOrm\QueryBuilder\QueryBuilderInterface;

trait PDOTrait
{
    protected $pdo;
    protected $query;
    protected $sth;

    public function connect(array $config)
    {
        if (empty($config['server'])) {
            throw new \InvalidArgumentException('server is required');
        }

        if (empty($config['database'])) {
            throw new \InvalidArgumentException('database is required');
        }

        if (empty($config['user'])) {
            throw new \InvalidArgumentException('user is required');
        }

        $dsn = sprintf($this->dsn_pattern, $config['server'], $config['database']);
        $user = $config['user'];
        $password = $config['password'] ?? null;
        $options = $config['options'] ?? [];

        $this->pdo = new \PDO($dsn, $user, $password, $options);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function close()
    {
        $this->pdo = null;
    }

    public function setQueryBuilder(QueryBuilderInterface $query)
    {
        $this->query = $query;
    }

    public function execute()
    {
        $this->sth = $this->pdo->prepare((string)$this->query);
        $results = $this->sth->execute($this->query->getValues());
        return $results;
    }

    public function lastInsertedId()
    {
        return $this->pdo->lastInsertId();
    }

    public function first()
    {
        return $this->sth->fetch(\PDO::FETCH_ASSOC);
    }

    public function all()
    {
        return $this->sth->fetchAll(\PDO::FETCH_ASSOC);
    }
}
