<?php 
    require_once 'pessoa.php';
    require_once 'carro.php';
    require_once 'livro.php';
    $ca = new carro();
    $p = new pessoa();
    $l = new livro();
    //sett pessoa
    $p->setNome("Vitor");
    $p->setIdade(16);
    $p->setPeso(66.0);
    $p->setSexo();
    //sett carro
    $ca->setMarca();
    $ca->setCor();
    $ca->setPlaca();
    $ca->setModelo();
    //sett livro
    $l->setTitulo();
    $l->setAutor();
    $l->setAno();
    $l->setEdicao();
    //apresentar pessoa
    echo "Nome = ".$p->getNome()."<br/>";
    echo "Idade = ".$p->getIdade()."<br/>";
    echo "Peso = ".$p->getPeso()."Kg<br/>";
    echo "Sexo = ".$p->getSexo()."<br/>";
    echo "==================<br/>";
    //apresentar carro
    echo "Marca = ".$ca->getMarca()."<br/>";
    echo "Cor = ".$ca->getCor()."<br/>";
    echo "Placa = ".$ca->getPlaca()."<br/>";
    echo "Modelo = ".$ca->getModelo()."<br/>";
    echo "==================<br/>";
    //apresentar livro
    echo "Titulo = ".$l->getTitulo()."<br/>";
    echo "Autor = ".$l->getAutor()."<br/>";
    echo "Ano = ".$l->getAno()."<br/>";
    echo "Edição = ".$l->getEdicao()."<br/>";
?>