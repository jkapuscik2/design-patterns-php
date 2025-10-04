<?php
declare(strict_types=1);

namespace App\Structural\Composite;

interface Budgeted
{
    public function calculateBudget(): int;
}
