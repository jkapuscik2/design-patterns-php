<?php

namespace App\Behavioral\Specification;

use DateTime;

final class StudentSpecification implements Specification
{
    public function isSatisfiedBy(Candidate $candidate): bool
    {
        foreach ($candidate->getEducation() as $education) {
            if ($education->getEndDate() > new DateTime()) {
                return true;
            }
        }

        return false;
    }
}
