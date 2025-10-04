<?php
declare(strict_types=1);

namespace App\Structural\Composite;

use SplObjectStorage;

final class Department implements BudgetedComposite
{
    private SplObjectStorage $dependencies;

    public function __construct(private string $name)
    {
        $this->dependencies = new SplObjectStorage();
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
