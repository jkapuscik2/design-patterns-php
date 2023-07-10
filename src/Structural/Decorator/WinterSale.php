<?php

namespace App\Structural\Decorator;

final class WinterSale extends ProductDecorator
{
    public const DISCOUNT_FACTOR = 0.5;

    public function getName(): string
    {
        return "WINTER SALES 50% OFF - {$this->product->getName()} ONLY {$this->getPrice()} EUR";
    }

    public function getPrice(): int
    {
        return round($this->product->getPrice() * self::DISCOUNT_FACTOR);
    }

}
