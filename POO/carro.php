<?php 
    class carro{
        private $marca;
        private $cor;
        private $placa;
        private $modelo;
        public function getMarca(){
            
            return $this->marca;
        }
        public function setMarca(){
            $this->marca = "Chevrolet.";
        }
        public function getCor(){
            return $this->cor;
        }
        public function setCor(){
            $this->cor="Preto";
        }
        public function getPlaca(){
            return $this->placa;
        }
        public function setPlaca(){
            $this->placa="VIT-2611";
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo(){
            $this->modelo="Novo Onix";
        }
    }
?>