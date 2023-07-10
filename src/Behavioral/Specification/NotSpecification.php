<?php

namespace App\Behavioral\Specification;

final readonly class NotSpecification implements Specification
{
    public function __construct(private Specification $specification)
    {
    }

    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}
