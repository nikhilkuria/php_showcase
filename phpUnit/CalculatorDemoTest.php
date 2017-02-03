<?php

/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 03/02/17
 * Time: 5:39 AM
 */

require 'CalculatorDemo.php';

class CalculatorDemoTest extends PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new CalculatorDemo();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}
