<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 17/03/17
 * Time: 6:27 PM
 */
// cli-config.php
require_once "bootstrap.php";
$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager)
));
return $helperSet;