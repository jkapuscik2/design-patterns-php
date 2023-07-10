<?php

namespace App\Behavioral\Specification;

final class ConvictedSpecification implements Specification
{
    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return $candidate->isConvicted();
    }
}
