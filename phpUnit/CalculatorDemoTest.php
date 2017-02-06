<?php

/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 03/02/17
 * Time: 5:39 AM
 */
use PHPUnit\Framework\TestCase;

class CalculatorDemoTest extends TestCase
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

    public function testAddWithZero()
    {
        $result = $this->calculator->add(0, 0);
        $this->assertEquals(0, $result);
    }

    public function testAddWithNegative()
    {
        $result = $this->calculator->add(-1, -1);
        $this->assertEquals(-2, $result);
    }
}
