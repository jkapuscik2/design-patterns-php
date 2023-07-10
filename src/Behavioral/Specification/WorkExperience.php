<?php

namespace App\Behavioral\Specification;

use DateTime;

final readonly class WorkExperience
{
    public function __construct(private string $companyName, private DateTime $start, private DateTime $end)
    {
    }

    public function getWorkedMonths(): int
    {
        $workedInterval = $this->start->diff($this->end);
        return ($workedInterval->y * 12) + $workedInterval->m;
    }

}
