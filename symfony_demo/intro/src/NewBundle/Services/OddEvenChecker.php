<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 16/03/17
 * Time: 7:24 AM
 */

namespace NewBundle\Services;

define("ODD", "odd");
define("EVEN", "even");

class OddEvenChecker
{

    public function check($num){
        return $num % 2 == 0 ? EVEN : ODD;
    }

}