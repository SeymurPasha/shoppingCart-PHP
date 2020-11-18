<?php

class Cart 
{
    /**
     * @var CartItem[]
     */
    public array $items = ["Classic1"=>212.99,"Classic2"=>314.99,"Classic3"=>229.99,"Classic4"=>419.99];

    // TODO Generate getters and setters of properties

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     */
    public function addProduct(Product $product, int $quantity)
    {
        //TODO Implement method
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        //TODO Implement method
    }

    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity()
    {
        
    }

    public function getItems()
    {
        foreach($this->items as $key => $value){
            echo $key."$".$value. "<br>";
        }
    }
    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum()
    {   
    return print_r(array_sum(array_values($this->items)));
    }
}