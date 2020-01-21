<?php

// namespace Builder;
// use Builder\CustomerBuilder;
include ('CustomerBuilder.php');

$customer = (new CustomerBuilder())
    ->setfirstName("Nama")
    ->setlastName("Nama Belakang")
    ->setemail("email@email.com")
    ->setaddres("Lamongan")
    ->setId("10")
    ->build();
$customer1 = (new CustomerBuilder())
    // ->setfirstName("Nama")
    ->setlastName("Nama Belakang")
    ->setemail("email@email.com")
    ->setaddres("Lamongan")
    ->setId("11")
    ->build();
$customer2 = (new CustomerBuilder())
    ->setfirstName("Nama")
    ->setlastName("Nama Belakang")
    ->setemail("email@email.com")
    // ->setaddres("Lamongan")
    ->setId("12")
    ->build();


print_r($customer);
echo ("<br/>");
print_r($customer1);
echo ("<br/>");
print_r($customer2);
echo ("<br/>");
// echo ("<br/>");
// echo json_encode($customer);
// echo ("<br/>");
// echo json_encode($customer1);
// echo ("<br/>");
// echo json_encode($customer2);
// echo json_decode($customer);