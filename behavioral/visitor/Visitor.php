<?php

namespace behavioral\visitor;

interface Visitor
{
    public function visitUniversity(University $university): array;

    public function visitStudent(Student $student): string;
}

