<?php 

namespace SON\AbstractFactory;

class LivroMongoDB implements AbstractLivroBanco {
    public function getTitle(): string
    {
        return 'MongoDB para iniciantes';
    }
    
    public function getAuthor(): string
    {
        return 'Ciclano de Tal';
    }

    public function getPages(): string
    {
        return '321';
    }
}