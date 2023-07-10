<?php

namespace App\Behavioral\Visitor;

final readonly class SickLeave
{
    public function __construct(private \DateTime $start, private \DateTime $end)
    {
    }

    public function getStart(): \DateTime
    {
        return $this->start;
    }

    public function getEnd(): \DateTime
    {
        return $this->end;
    }
}
