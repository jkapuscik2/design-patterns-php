<?php

namespace structural\composite;

interface Budgeted {
    public function calculateBudget (): int;
}