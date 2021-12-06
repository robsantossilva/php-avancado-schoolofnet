<?php 

namespace SON\AbstractFactory;

class LivroPHP implements AbstractLivroLinguagem {

    private $title = null;
    private $author = null;

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    
    public function getAuthor(): string
    {
        return $this->author;
    }
}