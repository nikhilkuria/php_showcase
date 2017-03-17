<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 17/03/17
 * Time: 6:42 PM
 */
// create_product.php
require_once "bootstrap.php";

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";