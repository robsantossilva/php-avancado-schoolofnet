<?php

namespace SON\Adapter;

use SON\Adapter\AdapterInterface\BookInterface;

class PHPBookAdapter implements BookInterface
{
    private $book;

    public function __construct(string $title, string $author)
    {
        $this->book = new PHPBook($title, $author);
    }

    public function getAuthorAndTitle()
    {
        return  $this->book->getTitle(). ' by ' . $this->book->getAuthor(). "\n";
    }
}