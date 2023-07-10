<?php

namespace App\Structural\Decorator;

abstract class ProductDecorator implements Product
{
    protected Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    abstract public function getName(): string;

    abstract public function getPrice(): int;

}
