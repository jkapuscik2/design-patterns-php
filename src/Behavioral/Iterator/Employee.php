<?php

namespace App\Behavioral\Iterator;

final readonly class Employee
{
    public function __construct(
        private string $name,
        private string $position
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }
}
