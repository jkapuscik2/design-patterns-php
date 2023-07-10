<?php

namespace App\Structural\Decorator;

final class SummerSale extends ProductDecorator
{
    public const DISCOUNT_FACTOR = 0.9;

    public function getName(): string
    {
        return "SUMMER SALES 10% OFF - {$this->product->getName()} ONLY {$this->getPrice()} EUR";
    }

    public function getPrice(): int
    {
        return round($this->product->getPrice() * self::DISCOUNT_FACTOR);
    }

}
