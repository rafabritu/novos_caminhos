<?php

<<<<<<< HEAD
class User
{
    private $firstName;
    private $lastName;
    private $email;

=======
/**
 * Undocumented class
 */
class User
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $firstName;
    public $lastName;
    public $email;

    /**
     * Obter o valor da propriedade firstName
     *
     * @return string
     */
>>>>>>> iuryrepo/master
    public function getFirstName()
    {
        return $this->firstName;
    }
<<<<<<< HEAD
    /**
     * Definir valor de firstName
     * 
     * @param string $firstName
     * @return object
     */

    public function setFirstName(string $firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRING);
        return $this;
    }

=======

    /**
     * Definir o valor da propriedade firstName
     *
     * @param string $firstName
     * @return object
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRING);

        return $this;
    }

    /**
     * Obter o valor da propriedade lastName
     *
     * @return string
     */
>>>>>>> iuryrepo/master
    public function getLastName()
    {
        return $this->lastName;
    }

<<<<<<< HEAD
    public function setLastName(string $lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRING);
    }

=======
    /**
     * Definir valor da propriedade lastName
     *
     * @param string $lastName
     * @return string
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRING);

        return $this;
    }

    /**
     * Obter valor da propriedade email
     *
     * @return string
     */
>>>>>>> iuryrepo/master
    public function getEmail()
    {
        return $this->email;
    }
<<<<<<< HEAD
    /**
     * Receber email e filtrar
     *
     * @param string $em
     * @return bool
     */
    public function setEmail(string $em)
    {
        if (filter_var($em, FILTER_VALIDATE_EMAIL)) {
            $this->email = $em;
            return true;
        } else {
            return false;
            $this->email = null;
=======

    /**
     * Definir valor da propriedade email
     *
     * @param string $email
     * @return bool
     */
    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return true;
        } else {
            $this->email = null;
            return false;
>>>>>>> iuryrepo/master
        }
        return $this;
    }
}