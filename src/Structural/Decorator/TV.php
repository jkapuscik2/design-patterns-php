<?php

namespace App\Structural\Decorator;

final readonly class TV implements Product
{
    public const TAX_RATE = 1.23;

    public function __construct(private float $price, private string $name)
    {
    }

    public function getName(): string
    {
        return "TV $this->name";
    }

    public function getPrice(): int
    {
        return round($this->price * self::TAX_RATE);
    }
}
