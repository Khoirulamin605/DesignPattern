<?php

include("EmployeeFactory.php");
include("AnimalFactory.php");

$staff =  EmployeeFactory::createStaff("Staff");
$manager =  EmployeeFactory::createManager("Manager");

AnimalFactoy::createSong("tiger");


print_r($staff);
print_r($manager);