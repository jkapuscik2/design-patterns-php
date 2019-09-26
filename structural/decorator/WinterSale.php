<?php

namespace structural\decorator;

class WinterSale extends ProductDecorator {

    const DISCOUNT_FACTOR = 0.5;

    public function getName (): string {
        return "WINTER SALES 50% OFF - {$this->product->getName()} ONLY {$this->getPrice()} EUR";
    }

    public function getPrice (): float {
        return $this->product->getPrice() * self::DISCOUNT_FACTOR;
    }

}