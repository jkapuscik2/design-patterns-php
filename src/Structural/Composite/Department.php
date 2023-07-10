<?php

namespace App\Structural\Composite;

use SplObjectStorage;

final class Department implements BudgetedComposite
{
    private SplObjectStorage $dependencies;
    private string $name;

    public function __construct(string $name)
    {
        $this->dependencies = new SplObjectStorage();
        $this->name = $name;
    }

    public function calculateBudget(): int
    {
        $total = 0;

        foreach ($this->getDependent() as $dependent) {
            $total += $dependent->calculateBudget();
        }

        return $total;
    }

    public function getDependent(): SplObjectStorage
    {
        return $this->dependencies;
    }

    public function addDependent(Budgeted $item): void
    {
        $this->dependencies->attach($item);
    }
}
