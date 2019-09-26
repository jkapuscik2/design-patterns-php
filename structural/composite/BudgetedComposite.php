<?php

namespace structural\composite;

use SplObjectStorage;

interface BudgetedComposite extends Budgeted {

    public function calculateBudget (): int;

    public function getDependent (): SplObjectStorage;

    public function addDependent (Budgeted $item): void;
}