<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 16/03/17
 * Time: 7:28 AM
 */

namespace NewBundle\Services;


class MetaInfoPrinter
{
    private $oddEvenChecker;

    public function __construct($oddEvenChecker)
    {
        $this->oddEvenChecker = $oddEvenChecker;
    }

    public function getMetaInfo($age){
        $ageType = $this->oddEvenChecker->check($age);
        return "The age is an ".$ageType." number.";
    }
}