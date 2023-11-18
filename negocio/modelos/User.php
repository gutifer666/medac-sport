<?php

namespace negocio\models;

class User
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $shippingAddress;

    public function __construct($firstName, $lastName, $email, $password, $shippingAddress) {

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->shippingAddress = $shippingAddress;
    }
}