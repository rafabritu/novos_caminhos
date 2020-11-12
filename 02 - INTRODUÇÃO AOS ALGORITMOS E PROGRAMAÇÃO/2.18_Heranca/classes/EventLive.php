<?php

namespace classes;

use classes\Address;
use DateTime;

class EventLive extends Event
{

    private $address;

    public function __construct($event, DateTime $date, $price, $vacation, Address $address)
    {
        parent::__construct($event, $date, $price, $vacation);
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }
}