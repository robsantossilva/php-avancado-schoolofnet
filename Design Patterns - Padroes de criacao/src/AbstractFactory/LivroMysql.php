<?php 

namespace SON\AbstractFactory;

class LivroMysql implements AbstractLivroBanco {
    public function getTitle(): string
    {
        return 'Mysql para iniciantes';
    }
    
    public function getAuthor(): string
    {
        return 'Ciclano da Silva';
    }

    public function getPages(): string
    {
        return '321';
    }
}