<?php

namespace Behavioral\Specification;

use DateTime;

class Education {

    private string $university;
    private DateTime $start;
    private DateTime $end;

    public function __construct(string $university, DateTime $start, DateTime $end)
    {
        $this->university = $university;
        $this->start = $start;
        $this->end = $end;
    }

    public function getEndDate() : DateTime {
        return $this->end;
    }

}