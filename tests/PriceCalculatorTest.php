<?php

namespace Dilab\Order\Test;
use Dilab\Order\PriceCalculator;
 
class PriceCalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $PriceCalculator;
 
    public function setUp()
    {
        parent::setUp();
        $this->PriceCalculator = new PriceCalculator();
    }
 
    public function tearDown()
    {
        parent::tearDown();
        unset($this->PriceCalculator);
    }
 
    /**
    * @test
    */
    public function object_can_created()
    {
        $priceCalculator = new PriceCalculator();
        $this->assertInstanceOf('Dilab\Order\PriceCalculator', $priceCalculator);
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
 
        $result = $this->PriceCalculator->total($items);
        $this->assertEquals(300, $result);
    }
 
    /**
    * @test
    */
    public function empty_items_should_return_zero()
    {
        $items = [];
        $result = $this->PriceCalculator->total($items);
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
        $result = $this->PriceCalculator->add($a, $b);
        $this->assertEquals($expected, $result);
    }
}
?>