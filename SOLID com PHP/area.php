<?php 

require __DIR__. '/vendor/autoload.php';

class Retangulo
{
    private float $largura;
    private float $altura;

    public function __construct(float $largura, float $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function area()
    {
        return [
            'altura' => $this->altura,
            'largura' => $this->largura,
            'area' => $this->largura * $this->altura
        ];
    }
}

class Quadrado extends Retangulo
{
    private float $largura = 0;
    private float $altura = 0;

    public function __construct(float $largura, float $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function area()
    {
        $area = $this->largura * $this->altura;

        return "Altura: $this->altura | Largura: $this->largura | Area: $area";
    }
}

class ImprimirArea
{
    public function imprimir(Retangulo $retangulo){
        print_r($retangulo->area());
        echo "\n";
    }
}

$imprimirArea = new ImprimirArea();
$imprimirArea->imprimir(new Retangulo(5,10));
$imprimirArea->imprimir(new Quadrado(5,5));