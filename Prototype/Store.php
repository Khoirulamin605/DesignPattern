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

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    public function clone() : Store
    {
        return new Store(
            $this->name,
            $this->city,
            $this->country,
            $this->category
        );
    }

}