<?php

namespace Behavioral\Visitor;

class University implements Visitable
{
    private $name;
    private $students;

    public function __construct(string $name, array $students)
    {
        $this->name = $name;
        $this->students = $students;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function accept(Visitor $visitor): array
    {
        return $visitor->visitUniversity($this);
    }
}