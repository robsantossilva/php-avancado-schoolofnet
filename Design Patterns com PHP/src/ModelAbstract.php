<?php 

namespace SON\Db;

use SON\Db\DbSingleton;
use SON\Db\Builder\BuilderInterface;
use SON\Db\Builder\DirectorAbstract;
use SON\Db\Builder\MySqlBuilder;
use SON\Db\Builder\SqlBuilder;
use SON\Db\QueryBuilder\MySql;
use SON\Db\QueryBuilder\Sql;

abstract class ModelAbstract extends DirectorAbstract
{

    protected $db;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->db = DbSingleton::getInstance();
        $driver = $this->db->getPdo()
            ->getAttribute(\PDO::ATTR_DRIVER_NAME);

        if($driver == 'mysql'){
            $builder = new MySqlBuilder(new MySql());
        }else{
            $builder = new SqlBuilder(new Sql());
        }

        parent::__construct($builder);

        $this->db->setDirector($this);
    }

    public function getAll()
    {
        return $this->db->getAll()->execute()->fetchAll();
    }
}