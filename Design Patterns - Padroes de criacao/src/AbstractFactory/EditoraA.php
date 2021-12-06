<?php 

namespace SON\AbstractFactory;

class EditoraA implements AbstractEditoraFactory 
{
    private $linguagem;
    private $banco;

    public function __construct()
    {
        $this->linguagem = new LivroPHP;
        $this->banco = new LivroMysql;
    }

    public function makeLivroLinguagem()
    {
        $this->linguagem->setTitle('PHP essencial');
        $this->linguagem->setAuthor('Fulano de Tal');
        return $this->linguagem;
    }

    public function makeLivroBanco()
    {
        return $this->banco;
    }
}