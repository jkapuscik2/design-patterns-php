<?php

namespace App\Structural\Composite;

final readonly class Employee implements Budgeted
{
    public function __construct(private string $name, private int $salary)
    {
    }

    public function calculateBudget(): int
    {
        return $this->salary;
    }
}
