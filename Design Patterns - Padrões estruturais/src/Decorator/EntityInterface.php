<?php

namespace SON\Decorator;

/**
 * Component
 */
interface EntityInterface
{
    public function getName() :string;
    public function setName(string $name);
}