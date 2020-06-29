<?php 
    class livro{
        private $titulo;
        private $autor;
        private $ano;
        private $edicao;
        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo(){
            $this->titulo="Armada";
        }
        public function getAutor(){
            return $this-> autor;
        }
        public function setAutor(){
            $this->autor="Ernest Cline";
        }
        public function getAno(){
            return $this->ano;
        }
        public function setAno(){
            $this->ano=2015;
        }
        public function getEdicao(){
            return $this->edicao;
        }
        public function setedicao(){
            $this->edicao= 1;
        }
    }
?>