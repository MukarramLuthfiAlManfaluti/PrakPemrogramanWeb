<?php

namespace Abstract;

abstract class AbstractCoffee {
    protected $name;
    protected $price;

    abstract public function getDescription();
    
    public function getPrice() {
        return $this->price;
    }
}
