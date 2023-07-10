<?php

namespace App\Structural\Decorator;

interface Product
{
    public function getName(): string;

    public function getPrice(): int;
}
