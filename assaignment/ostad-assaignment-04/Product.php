<?php

class Product {
    public $id;
    public $name;
    public $price;
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties

        $this->id=$id;
        $this->name=$name;
        $this->price=$price;

    }
    // TODO: Add getFormattedPrice method

    public function getFormattedPrice(){
       return number_format($this->price, 2);
    }


    // TODO: Add showDetails method

   public function showDetails(){

    echo "ID: $this->id <br> Name: $this->name <br> Price: $".$this->getFormattedPrice();

    }
}

$product = new Product(1, 'T-shirt', 19.99);
 $product->showDetails();





// Expected Output:


// Product Details:
// - ID: 1
// - Name: T-shirt
// - Price: $19.99