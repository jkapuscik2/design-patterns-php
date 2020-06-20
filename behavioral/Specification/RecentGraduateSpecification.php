<?php

namespace Behavioral\Specification;

use DateTime;
use DateInterval;

class RecentGraduateSpecification implements Specification
{
    private const HYSTERESIS = 12; // months

    public function isSatisfiedBy(Candidate $candidate): bool
    {
        $maxEndDate = (new DateTime())->sub(new DateInterval(sprintf("P%dM", self::HYSTERESIS)));

        foreach ($candidate->getEducation() as $education) {
            if ($education->getEndDate() < new DateTime()
                && $education->getEndDate() > $maxEndDate) {
                return true;
            }
        }

        return false;
    }
}