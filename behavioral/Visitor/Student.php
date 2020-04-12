<?php

namespace Behavioral\Visitor;

class Student implements Visitable
{
    private $name;
    private $sickLeaves = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addSickLeave(\DateTime $start, \DateTime $end) : void
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