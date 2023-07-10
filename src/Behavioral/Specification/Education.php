<?php

namespace App\Behavioral\Specification;

use DateTime;

final readonly class Education
{
    public function __construct(private string $university, private DateTime $start, private DateTime $end)
    {
    }

    public function getEndDate(): DateTime
    {
        return $this->end;
    }

}
