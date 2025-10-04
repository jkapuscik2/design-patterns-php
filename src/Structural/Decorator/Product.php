<?php
declare(strict_types=1);

namespace App\Structural\Decorator;

interface Product
{
    public function getName(): string;

    public function getPrice(): int;
}
