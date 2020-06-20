<?php

namespace Behavioral\Specification;

use DateTime;

class WorkExperience {

    private string $companyName;
    private DateTime $start;
    private DateTime $end;

    public function __construct(string $companyName, DateTime $start, DateTime $end)
    {
        $this->companyName = $companyName;
        $this->start = $start;
        $this->end = $end;
    }

    public function getWorkedMonths() : int {
        $workedInterval = $this->start->diff($this->end);
        var_dump("months", $workedInterval->m);
        return ($workedInterval->y * 12) + $workedInterval->m;
    }

}