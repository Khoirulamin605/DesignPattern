<?php

// namespace Builder\Customer;

class Customer
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $addres;

    public function __construct($id,$firstName,$lastName,$email,$phone, $addres){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->addres = $addres;
    }

    // getter
    // public function getId(){
    //     return $this->id;
    // }
    // public function getfirstName(){
    //     return $this->firstName;
    // }
    // public function getlastName(){
    //     return $this->lastName;
    // }
    // public function getemail(){
    //     return $this->email;
    // }
    // public function getphone(){
    //     return $this->phone;
    // }



    // setter
    // public function setphone(){
    //     return $this->phone;
    // }
    // public function setId($id){
    //     return $this->id;
    // }
    // public function setfirstName(){
    //     return $this->firstName;
    // }
    // public function setlastName(){
    //     return $this->lastName;
    // }
    // public function setemail(){
    //     return $this->email;
    // }
}

