<?php 

namespace SON\AbstractFactory;

class LivroNodeJS implements AbstractLivroLinguagem {
    public function getTitle(): string
    {
        return 'NodeJS essencial';
    }
    
    public function getAuthor(): string
    {
        return 'Fulano de Souza';
    }

    public function getPages(): string
    {
        return '123';
    }
}