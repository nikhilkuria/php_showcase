<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 17/03/17
 * Time: 9:52 PM
 */
// list_products.php
require_once "bootstrap.php";

$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}