<?php

namespace structural\decorator;

class Shirt implements Product {

    protected $price;
    protected $name;

    const TAX_RATE = 1.1;

    public function __construct (float $price, string $name) {
        $this->price = $price;
        $this->name = $name;
    }

    public function getName (): string {
        return "Shirt {$this->name}";
    }

    public function getPrice (): float {
        return $this->price * self::TAX_RATE;
    }
}