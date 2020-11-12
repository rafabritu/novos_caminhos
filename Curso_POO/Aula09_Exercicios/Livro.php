<?php
require_once 'Pessoa.php';
class Livro implements Publicacao
{
    //Atrib
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //Metodos Especiais
    public function __construct($t, $a, $tp)
    {
        $this->setTitulo($t);
        $this->setAutor($a);
        $this->setTotPaginas($tp);
        $this->setPagAtual(0);
        $this->setAberto(false);
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
    //Metodos
    public function detalhes()
    {
        echo "<p>------------------</p>";
        echo "<h2>{$this->getTitulo()}</h2>";
        echo "<p>Autor: " . $this->getAutor();
        echo "<p>Total de páginas: " . $this->getTotPaginas();
        echo "<p>Página atual: " . $this->getPagAtual();
        if ($this->getAberto()) {
            echo "<p>Este livro está aberto.";
        } else {
            echo "<p>Este livro está fechado.";
        }
        echo "<br>Sendo lido por: " . $this->leitor->getNome();
    }

    function abrir($pe)
    {
        $this->setAberto(true);
        $this->setLeitor($pe);
    }
    function fechar()
    {
        $this->setAberto(false);
    }
    function folhear()
    {
        $this->setPagAtual(rand(1, $this->getTotPaginas()));
    }
    function avancarPag()
    {
        if ($this->getAberto()) {
            $this->setPagAtual($this->getPagAtual() + 1);
        } else {
            echo "<p>Não posso mudar a página, pois o livro está fechado.";
        }
    }
    function voltarPag()
    {
        if ($this->getAberto()) {
            $this->setPagAtual($this->getPagAtual() - 1);
        } else {
            echo "<p>Não posso mudar a página, pois o livro está fechado.";
        }
    }
}