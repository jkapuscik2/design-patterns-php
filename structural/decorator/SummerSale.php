<?php

namespace structural\decorator;

class SummerSale extends ProductDecorator {

    const DISCOUNT_FACTOR = 0.9;

    public function getName (): string {
        return "SUMMER SALES 10% OFF - {$this->product->getName()} ONLY {$this->getPrice()} EUR";
    }

    public function getPrice (): float {
        return $this->product->getPrice() * self::DISCOUNT_FACTOR;
    }

}