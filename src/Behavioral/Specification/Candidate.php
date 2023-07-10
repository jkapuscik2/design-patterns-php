<?php

namespace App\Behavioral\Specification;

final readonly class Candidate
{
    public function __construct(private int $age, private array $workExperience, private array $education, private bool $isConvicted)
    {
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getWorkExperience(): array
    {
        return $this->workExperience;
    }

    public function getEducation(): array
    {
        return $this->education;
    }

    public function isConvicted(): bool
    {
        return $this->isConvicted;
    }

}
