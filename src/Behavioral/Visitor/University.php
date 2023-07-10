<?php

namespace App\Behavioral\Visitor;

final readonly class University implements Visitable
{
    public function __construct(private string $name, private array $students)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitUniversity($this);
    }
}
