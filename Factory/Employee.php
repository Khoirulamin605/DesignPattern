<?php


class Employee{

    private $name;
    private $title;
    private $salary;

    public function __construct($name, $title, $salary){
        $this->name = $name;
        $this->title = $title;
        $this->salary = $salary;
    }

}