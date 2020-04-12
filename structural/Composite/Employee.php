<?php

namespace Structural\Composite;

class Employee implements Budgeted {

    private $name;
    private $salary;

    public function __construct ($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function calculateBudget (): int {
        return $this->salary;
    }
}