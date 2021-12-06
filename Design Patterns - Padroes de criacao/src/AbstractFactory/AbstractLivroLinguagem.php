<?php 

namespace SON\AbstractFactory;

interface AbstractLivroLinguagem {
    public function getTitle(): string;
    public function getAuthor(): string;
}