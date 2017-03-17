<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 17/03/17
 * Time: 9:53 PM
 */
// show_product.php <id>
require_once "bootstrap.php";

$id = $argv[1];
$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());