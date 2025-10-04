<?php
declare(strict_types=1);

namespace App\Structural\Composite;

use SplObjectStorage;

interface BudgetedComposite extends Budgeted
{
    public function calculateBudget(): int;

    public function getDependent(): SplObjectStorage;

    public function addDependent(Budgeted $item): void;
}
