<?php
declare(strict_types=1);

namespace App\Structural\Decorator;

abstract class ProductDecorator implements Product
{
    public function __construct(protected readonly Product $product)
    {
    }

    abstract public function getName(): string;

    abstract public function getPrice(): int;

}
