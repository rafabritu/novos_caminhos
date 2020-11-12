<?php

class Lutador
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria;
    private $vitorias, $derrotas, $empates;
    //Metodos Especiais

    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria($peso);
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria($peso)
    {
        if ($peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }

    function apresentar()
    {
        echo "<p>---------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente do " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg";
        echo "<p>Ele tem : " . $this->getVitorias() . " Vitórias, ";
        echo $this->getDerrotas() . " Derrotas e ";
        echo $this->getEmpates() . " Empates";
    }

    function status()
    {
        echo "<p>------------------------</p>";
        echo "É um peso " . $this->getCategoria() . " e tem ";
        echo $this->getVitorias() . " Vitórias, ";
        echo $this->getDerrotas() . " Derrotas e ";
        echo $this->getEmpates() . " Empates";
    }
    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
}