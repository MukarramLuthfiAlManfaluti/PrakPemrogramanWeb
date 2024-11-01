<?php

namespace Models;

class CoffeeOrder {
    private $coffee;
    private $quantity;

    public function __construct(Coffee $coffee, $quantity) {
        $this->coffee = $coffee;
        $this->quantity = $quantity;
    }

    public function placeOrder() {
        // Menghitung total biaya
        return $this->coffee->price * $this->quantity;
    }
}
