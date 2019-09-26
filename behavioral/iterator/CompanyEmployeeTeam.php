<?php

namespace behavioral\iterator;

use SplObjectStorage, IteratorAggregate, Countable;

class CompanyEmployeeTeam implements IteratorAggregate, Countable {

    public $person;
    private $subordinates;

    public function __construct (Employee $person) {
        $this->subordinates = new SplObjectStorage();
        $this->person = $person;
    }

    public function addSubordinate (CompanyEmployeeTeam $subordinate): void {
        $this->subordinates->attach($subordinate);
    }

    public function removeSubordinate (CompanyEmployeeTeam $subordinate): void {
        $this->subordinates->detach($subordinate);
    }

    public function getSubordinates (): SplObjectStorage {
        return $this->subordinates;
    }

    public function getIterator (): EmployeeTeamIterator {
        return new EmployeeTeamIterator($this);
    }

    public function count (): int {
        return count(new EmployeeTeamIterator($this));
    }

    public function getName (): string {
        return $this->person->name;
    }

    public function getPosition (): string {
        return $this->person->position;
    }
}