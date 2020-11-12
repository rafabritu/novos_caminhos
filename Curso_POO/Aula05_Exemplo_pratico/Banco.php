<?php

class Conta
{
    //Atributos
    public $numConta;
    protected $tipo;
    public $dono;
    private $saldo;
    private $status;

    //Construtor
    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta criada com sucesso!!</p>";
    }
    public function setNumConta($numero)
    {
        $this->numConta = $numero;
    }
    public function getNumConta()
    {
        return $this->numConta;
    }

    //Getters and Setters
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }

    //Metodos específicos
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Há saldo na conta, não posso fecha-la!!";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Há um débito na conta, impossível encerrar!!";
        } else {
            $this->setStatus(false);
            echo "<p>Conta Encerrada com Sucesso.";
        }
    }
    public function depositar($valor)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de $valor realizado com sucesso, seu novo saldo é " . $this->getSaldo();
        } else {
            echo "Erro ao depositar, sua conta está inativa.";
        }
    }
    public function sacar($valor)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de $valor realizado com sucesso, seu saldo atual é " . $this->getSaldo();
            } elseif ($this->getSaldo() < $valor) {
                echo "<p>Saldo insuficiente, tente outro valor.";
            }
        } else {
            echo "Impossível sacar, conta inativa!!";
        }
    }
    public function pagarMensal()
    {
        $mensalidade;
        if ($this->getTipo() == "CC") {
            $mensalidade = 12;
        } elseif ($this->getTipo() == "CP") {
            $mensalidade = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $mensalidade);
            echo "<p>Mensalidade de $mensalidade debitada da conta, seu saldo atual é </p>" . $this->getSaldo();
        } else {
            echo "<p>Problemas com a conta, não posso cobrar!!</p>";
        }
    }
}