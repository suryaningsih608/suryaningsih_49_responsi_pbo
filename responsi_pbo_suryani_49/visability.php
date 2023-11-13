<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);

// tampilkan product get name
echo $product->getName();
// tampilkan product get price
echo $product->getPrice();

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();