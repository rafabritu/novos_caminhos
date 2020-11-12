<?php

namespace classes;

class Company
{
    private $company;
    private $address;
    private $team;
    private $products;

    //Metodos Especiais
    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function bootCompany($company, $address)
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function boot($company, Address $address)
    {
        $this->company = $company;
        $this->address = $address;
    }
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }
    public function addTeamMember($job, $firstName, $lastName)
    {
        $this->team[] = new User($job, $firstName, $lastName);
    }
}