<?php

namespace classes;

use DateTime;

class Event
{
    private $event;
    private $date;
    private $price;
    private $register;
    protected $vacancies;

    public function __construct($event, DateTime $date, $price, $vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }
    public function register($fullName, $email)
    {
        if ($this->vacancies >= 1) {
            $this->vacancies -= 1;
            $this->setRegister($fullName, $email);
            echo "<p class='trigger error'>Parabéns {$fullName}, vaga garantida!</p>";
        } else {
            echo "<p class='trigger error'>Desculpe {$fullName}, mas as vagas esgotaram.</p>";
        }
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function getDate()
    {
        return $this->date->format("d/m/y H:i");
    }

    public function getPrice()
    {
        return number_format($this->price, "2", ",", ".");
    }

    public function getRegister()
    {
        return $this->register;
    }

    public function setRegister($fullName, $email): void
    {
        $this->register = [
            "name" => $fullName,
            "email" => $email
        ];
    }
}