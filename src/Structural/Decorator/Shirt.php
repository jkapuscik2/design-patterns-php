<?php
declare(strict_types=1);

namespace App\Structural\Decorator;

final readonly class Shirt implements Product
{
    public const TAX_RATE = 1.1;

    public function __construct(private float $price, private string $name)
    {
    }

    public function getName(): string
    {
        return "Shirt {$this->name}";
    }

    public function getPrice(): int
    {
        return intval(round($this->price * self::TAX_RATE));
    }
}
