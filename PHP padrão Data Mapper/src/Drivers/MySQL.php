<?php

namespace Robsantossilva\DataMapperOrm\Drivers;

class MySQL implements DriverInterface
{
    protected $dsn_pattern = 'mysql:host=%s;dbname=%s';

    use PDOTrait;
}
