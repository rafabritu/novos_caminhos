<?php

namespace classes;

class EventOnline extends Event
{
    private $link;

    public function __construct($event, \DateTime $date, $price, $link)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }
    public function register($fullName, $email)
    {
        $this->vacancies += 1;
        $this->setRegister($fullName, $email);
        echo "<p class='trigger error'>Show {$fullName}, vaga garantida!</p>";
    }
}