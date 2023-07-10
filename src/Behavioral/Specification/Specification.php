<?php

namespace App\Behavioral\Specification;

interface Specification
{
    public function isSatisfiedBy(Candidate $candidate): bool;
}
