<?php

namespace App\Behavioral\Visitor;

final class Student implements Visitable
{
    private string $name;
    private array $sickLeaves = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addSickLeave(\DateTime $start, \DateTime $end): void
    {
        $this->sickLeaves[] = new SickLeave($start, $end);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSickLeaves(): array
    {
        return $this->sickLeaves;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitStudent($this);
    }
}
