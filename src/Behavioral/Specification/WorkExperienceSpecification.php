<?php

namespace App\Behavioral\Specification;

final readonly class WorkExperienceSpecification implements Specification
{
    public function __construct(private int $minYearsOfExperience)
    {
    }

    public function isSatisfiedBy(Candidate $candidate): bool
    {
        $totalMonthsOfExperience = 0;

        foreach ($candidate->getWorkExperience() as $experience) {
            $totalMonthsOfExperience += $experience->getWorkedMonths();
        }

        return $totalMonthsOfExperience / 12 >= $this->minYearsOfExperience;
    }
}
