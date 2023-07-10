<?php

namespace App\Behavioral\Iterator;

use Iterator;
use Countable;

class TeamIterator implements Iterator, Countable
{
    private int $position;
    private array $teams = [];

    public function __construct(Team $employee)
    {
        $this->addTeam($employee);
        $this->position = 0;
    }

    protected function addTeam(Team $employee): void
    {
        foreach ($employee->getTeams() as $member) {
            $this->teams[] = $member;
            $this->addTeam($member);
        }
    }

    public function current(): Team
    {
        return $this->teams[$this->position];
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->teams[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function count(): int
    {
        return count($this->teams);
    }
}
