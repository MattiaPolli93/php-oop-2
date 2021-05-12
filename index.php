<?php

include_once("classes/product.class.php");

// Product #1
$product1 = new Product("Shampoo");
$productSpecifics1 = new Specifics("Shampoo", "L'Oréal", "Hygiene", 8.45);
echo "<h2><strong>Product selected:</strong></h2> {$product1->getProduct()}";
echo "<h3><strong>Product specifics:</strong></h3> {$productSpecifics1->getProductDetails()}";

// Product #2
$product2 = new Product("Laptop");
$productSpecifics2 = new Specifics("Laptop", "Apple", "IT", 1200.00);
echo "<h2><strong>Product selected:</strong></h2> {$product2->getProduct()}";
echo "<h3><strong>Product specifics:</strong></h3> {$productSpecifics2->getProductDetails()}";

// Product #3
$product3 = new Product("Stove");
$productSpecifics3 = new Specifics("Stove", "IKEA", "Furniture", 16.25);
echo "<h2><strong>Product selected:</strong></h2> {$product3->getProduct()}";
echo "<h3><strong>Product specifics:</strong></h3> {$productSpecifics3->getProductDetails()}";