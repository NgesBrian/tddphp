<?php

namespace Dilab\Order\Test;
use Dilab\Order\SumCalculator;
 
class SumCalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $SumCalculator;
 
    //this function is to initiliaze the test 
    public function setUp()
    {
        parent::setUp();
        $this->SumCalculator = new SumCalculator();
    }
    
    //this function is to clear space when the test is done running
    public function tearDown()
    {
        parent::tearDown();
        unset($this->SumCalculator);
    }
 
    /**
    * @test
    */
    public function object_can_created()
    {
        $sumCalculator = new SumCalculator();
        $this->assertInstanceOf('Dilab\Order\SumCalculator', $sumCalculator);
    }
 
    /**
    * @test
    */
    public function should_sum_price()
    {
        $items = [
            ['price' => 100],
            ['price' => 200],
        ];
 
        $result = $this->SumCalculator->total($items);
        $this->assertEquals(300, $result);
    }
 
    /**
    * @test
    */
    public function empty_items_should_return_zero()
    {
        $items = [];
        $result = $this->SumCalculator->total($items);
        $this->assertEquals(0, $result);
    }


    public function addDataProvider()
    {
        return array(
            array(1,2,3),
            array(0,0,0),
            array(-1,-1,-2),
        );
    }
 
    /**
     ** @dataProvider addDataProvider
     * @test
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->SumCalculator->add($a, $b);
        $this->assertEquals($expected, $result);
    }
}
?>