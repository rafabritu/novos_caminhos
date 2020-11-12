<?php

class Caneta
{

    public $modelo; //var indica visibilidade genérica do php(public)
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rabiscar</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
    }
    private function tampar()
    {
        $this->tampada = true;
    }
    public function destampar()
    {
        $this->tampada = false;
    }
}