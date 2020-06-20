<?php

namespace Behavioral\Specification;

class Candidate
{
    private int $age;
    private array $workExperience;
    private array $education;
    private bool $isConvicted;

    public function __construct(int $age, array $workExperience, array $education, bool $isConvicted)
    {
        $this->age = $age;
        $this->workExperience = $workExperience;
        $this->education = $education;
        $this->isConvicted = $isConvicted;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getWorkExperience(): array
    {
        return $this->workExperience;
    }

    public function getEducation()
    {
        return $this->education;
    }

    public function isConvicted(): bool
    {
        return $this->isConvicted;
    }

}