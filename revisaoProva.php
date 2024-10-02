<?php

class Pessoa {
    private $Nome;
    private $idade;
    public $observacao;

    public function __construct($pNome, $pIdade, $pObservacao) {
        $this->Nome = $pNome;
        $this->idade = $pIdade;
        $this->observacao = $pObservacao;
    }

    public function apresentar() {
        echo "Nome: " . $this->Nome . " | idade: " . $this->idade . " | Observacao: " . $this->observacao;
    }
}

$cafe = new Pessoa("Fernando", "26", "Testando");
$cafe->apresentar();


class Aluno extends Pessoa {
    private $matricula;
    private $media;

    public function __construct($pMatricula, $pMedia) {
        $this->matricula = $pMatricula;
        $this->media = $pMedia;
    }

    public function mostrar() {
        echo " | Matricula: " . $this->matricula . " | Media: " . $this->media . "\n";
    }

    public function apresentar() {
        echo "O polimorfismo aconteceu";
    }
}

$cha = new Aluno("Fernando", "30", "outro", "122344433", "50");

$cha->mostrar();
$cha->apresentar();
?>