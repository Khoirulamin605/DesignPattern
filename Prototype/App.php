<?php


include("Store.php");

$store = new Store("Toko1", "Jakarta", "Indonesia", "Butik"); 
$store1 = $store->clone();
$store1->setName("Oke");
$store1->setCity("lamongan");


print_r($store);
echo("<br/>");
print_r($store1);