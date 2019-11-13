<?php

namespace Dilab\Order;
class PriceCalculator
{
	//sum items in an array an return results
    public function total($items)
	{
	    return array_reduce($items, function ($carry, $item) {
	       return $carry + $item['price'];
	    }, 0);
	}

	//add two integers and return results
	public function add($a, $b)
    {
        return $a + $b;
    }
}
?>