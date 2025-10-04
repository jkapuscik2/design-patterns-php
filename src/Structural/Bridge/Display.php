<?php
declare(strict_types=1);

namespace App\Structural\Bridge;

abstract readonly class Display
{
    public function __construct(protected Content $content)
    {
    }

    abstract public function render(): string;

}
