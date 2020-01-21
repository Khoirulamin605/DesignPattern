<?php

class Store
{
    private $name;
    private $city;
    private $country;
    private $category;

    public function __construct($name,$city,$country,$category){
        $this->name = $name;
        $this->city = $city;
        $this->country = $country;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function getCategory()
    {
        return $this->category;
    }

}