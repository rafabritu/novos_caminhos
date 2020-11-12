<?php

class Pessoa
{
    //Atributos
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($n, $i, $s)
    {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }
}