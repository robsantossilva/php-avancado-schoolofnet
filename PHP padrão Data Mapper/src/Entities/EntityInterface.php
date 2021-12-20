<?php

namespace Robsantossilva\DataMapperOrm\Entities;

interface EntityInterface
{
    public function __construct(array $data = []);
    public function setAll(array $data);
    public function getAll(): array;
    public function getTable(): string;
}
