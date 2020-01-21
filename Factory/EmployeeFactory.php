<?php

include ("Employee.php");

class EmployeeFactory{


    static function createManager($name):Employee 
    {
        return new Employee($name, "manager", 20000000);
    }

    static function createStaff($name):Employee 
    {
        return new Employee($name, "Staff", 10000000);
    }

}