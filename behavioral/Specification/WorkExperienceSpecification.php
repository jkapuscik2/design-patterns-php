<?php

namespace Behavioral\Specification;

class WorkExperienceSpecification implements Specification
{
    private int $minYearsOfExperience;

    public function __construct(int $minYearsOfExperience)
    {
        $this->minYearsOfExperience = $minYearsOfExperience;
    }

    public function isSatisfiedBy(Candidate $candidate) : bool
    {
        $totalMonthsOfExperience = 0;

        foreach ($candidate->getWorkExperience() as $experience) {
            $totalMonthsOfExperience += $experience->getWorkedMonths();
        }

        return $totalMonthsOfExperience / 12 >= $this->minYearsOfExperience;
    }
}