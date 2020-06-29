<?php 
    class pessoa{
        private $nome;
        private $idade;
        private $peso;
        private $sexo;
        public function _construct($argNome = '', $argIdade = 0, $argpPeso = 0, $argSexo = ''){
            $this->nome=$argNome;
            $this->idade=$argIdade;
            $this->peso=$argPeso;
            $this->sexo=$argSexo;
        }
        public function getNome(){
            
            return $this->nome;
        }
        public function setNome($argNome){
            $this->nome = $argNome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($argIdade){
            $this->idade=$argIdade;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function setPeso($argPeso){
            $this->peso=$argPeso;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setsexo(){
            $this->sexo="Masculino";
        }
        
    }
?>