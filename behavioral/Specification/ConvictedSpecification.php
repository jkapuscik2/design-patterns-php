<?php

namespace Behavioral\Specification;

class ConvictedSpecification implements Specification
{

    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return $candidate->isConvicted();
    }
}