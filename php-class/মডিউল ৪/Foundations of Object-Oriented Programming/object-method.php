<?php

class cart{
    public $itemTotal;
    public $shippingCost;
    public $discount;

    function calculateTotal(){
        $subtotal = $this->itemTotal+$this->shippingCost-$this ->discount;
        return $subtotal;
    }
}

$cart = new cart();

$cart ->itemTotal=100;
$cart ->shippingCost=20;
$cart ->discount=10;

$subtotal = $cart->calculateTotal();
echo $subtotal; 