<?php

namespace Behavioral\Specification;

class AgeSpecification implements Specification {

    private int $maxAge;

    public function __construct(int $maxAge)
    {
        $this->maxAge = $maxAge;
    }

    public function isSatisfiedBy(Candidate $candidate) : bool
    {
        return $candidate->getAge() <= $this->maxAge;
    }

}