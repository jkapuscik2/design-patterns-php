<?php

namespace App\Behavioral\Iterator;

use SplObjectStorage;
use IteratorAggregate;
use Countable;

final class Team implements IteratorAggregate, Countable
{
    private SplObjectStorage $teams;

    public function __construct(
        private readonly string   $name,
        private readonly Employee $leader,
    ) {
        $this->teams = new SplObjectStorage();
    }

    public function addTeam(Team $subordinate): void
    {
        $this->teams->attach($subordinate);
    }

    public function detachTeam(Team $subordinate): void
    {
        $this->teams->detach($subordinate);
    }

    public function getTeams(): SplObjectStorage
    {
        return $this->teams;
    }

    public function getIterator(): TeamIterator
    {
        return new TeamIterator($this);
    }

    public function count(): int
    {
        return count(new TeamIterator($this));
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLeader(): Employee
    {
        return $this->leader;
    }

    public function printSummary(): void
    {
        echo $this->leader->getPosition() . ": " . $this->leader->getName() . " manages " . count($this) . " teams" . PHP_EOL;

        foreach ($this as $team) {
            echo $team->getName() . " led by: " . $team->getLeader()->getName() . PHP_EOL;
        }
        echo PHP_EOL;
    }
}
