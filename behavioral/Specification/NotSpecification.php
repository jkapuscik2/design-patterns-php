<?php

namespace Behavioral\Specification;

class NotSpecification implements Specification
{
    private Specification $specification;

    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(Candidate $candidate): bool
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}