<?php

namespace SON\Adapter;

use SON\Adapter\AdapterInterface\BookInterface;

class RenderBook
{
    private $book;

    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    public function renderTitleAndName()
    {
        return $this->book->getAuthorAndTitle();
    }
}