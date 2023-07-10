<?php

namespace App\Behavioral\Specification;

final readonly class MaxAgeSpecification implements Specification
{
    public function __construct(private int $maxAge)
    {
    }

    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return $candidate->getAge() <= $this->maxAge;
    }

}
