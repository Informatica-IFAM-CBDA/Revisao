<?php 
    class Fernando {
        private $NomeCompleto;
        private $Beleza;
        private $Forca;
        private $Inteligencia;
        //Novo atributo
        private $Desejo;

        public function __construct($pNomeCompleto, $pBeleza, $pForca, $pInteligencia) {
            $this->NomeCompleto = $pNomeCompleto;
            $this->Beleza = $pBeleza;
            $this->Forca = $pForca;
            $this->Inteligencia = $pInteligencia;
        }

        public function quemSouEu() {
            echo "Eu sou: " . $this->NomeCompleto . ", de beleza " . $this->Beleza . ", dono de uma força " . $this->Forca . 
            " portador de uma inteligencia " . $this->Inteligencia . "\n";
        }

        public function oQueQueroSer($pDesejo) {
            $this->Desejo = $pDesejo;
        }

        public function queroSer() {
            echo "Eu quero: " . $this->Desejo . ". Jovenssssss!";
        }
    }

    $instacia = new Fernando("FERNANDO SOUZA", "ESMAGADORA", "ESTRONDOSA", "INIGUALAVEL");
    echo "\n";
    $instacia->quemSouEu();
    echo "\n";
    $instacia->oQueQueroSer("Ser a pessoa que trara um conhecimento estrondosamente grande para meus alunos");
    $instacia->queroSer();
    echo "\n";
    echo "....\n";
?>