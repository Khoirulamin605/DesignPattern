<?php


// namespace Builder;

// use Builder\Customer;

include ('Customer.php');

class CustomerBuilder{

    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $phone = "0833";
    private $addres = "dsegdghed";


    // setter
    public function setphone($phone){
        $this->phone = $phone;
        return $this;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function setfirstName($firstName){
        $this->firstName = $firstName;
        return $this;
    }
    public function setlastName($lastName){
        $this->lastName = $lastName;
        return $this;
    }
    public function setemail($email){
        $this->email = $email ;
        return $this;
    }
    public function setaddres($addres){
        $this->addres = $addres ;
        return $this;
    }

    public function build(): Customer{
        return new Customer(
            $this->id,
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->phone,
            $this->addres
        );
    }
}