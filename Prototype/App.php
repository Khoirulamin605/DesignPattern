<?php


include("Store.php");

$store = new Store("Toko1", "Jakarta", "Indonesia", "Butik"); 
$store1 = new Store("Toko2", $store->getCity(), $store->getCountry(), "Butik"); 


print_r($store);
echo("<br/>");
print_r($store1);