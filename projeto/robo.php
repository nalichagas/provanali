<?php
    
    class robo{
    public $nome;
    public $modelo;
    public $energia;
    public $potencia;

    public function __construct($nome, $modelo, $energia = null, $potencia){
        $configuracoes = [
            "Explorador" => [
                "energia" => 100,
                "potencia" => 20
            ],
            "Engenheiro" => [
                "energia" => 120,
                "potencia" => 15
            ],
            "Defensor" => [
                "energia" => 150,
                "potencia" =>30
            ]
            ];
        
            if(!isset($configuracoes[$modelo])){
                throw new InvalidArgumentException("Modelo invalido.");
            }

            $this->nome = $nome;
            $this->modelo = $modelo;

            $this->energia = $energia ?? $configuracoes[$modelo]["energia"];
            $this->potencia = $configuracoes[$modelo]["potencia"];
    }

    public function exibirStatus(){
        return "Nome:" . $this->nome;
        "Modelo:" . $this->modelo;
        "Energia:" . $this->energia;
        "Potencia:" . $this->potencia;
    }

    public function recarregar(){
        $this->energia = min(200, $this->energia + 20);
    }

    public function paraArray(){
        return [
            "nome"=> $this->nome,
            "modelo"=> $this->modelo,
            "energia"=> $this->energia,
            "potencia"=> $this->potencia
        ];
    }
}
?>
