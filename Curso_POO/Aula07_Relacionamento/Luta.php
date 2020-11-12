<?php
require_once 'Lutador.php';
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function __construct()
    {
    }
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }
    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2) {
            $this->setAprovada(true);
            $this->desafiante = $l1;
            $this->desafiado = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiante = null;
            $this->desafiado = null;
        }
    }
    public function lutar()
    {
        if ($this->getAprovada()) {
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: //Empate
                    echo "<p>Empatou!!";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiante Ganhou
                    echo "<p>" . $this->desafiante->getNome() . "<p> ganhou a luta!!";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                case 2: //Desafido Ganhou
                    echo "<p>" . $this->desafiado->getNome() . " ganhou a luta!!";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
            }
        } else {
            echo "<p>A Luta não pode acontercer!!";
        }
    }
}