<?php
include('./Item.php');

class Cart extends CartItem { 
public $item;
public $price;
public $quantity;

function setItem() {
$this->item = $this->name;
}
function setPrice() {
$this->price = $this->cost;
}


}
