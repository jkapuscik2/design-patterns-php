<?php

namespace App\Behavioral\Visitor;

interface Visitor
{
    public function visitUniversity(University $university): string;

    public function visitStudent(Student $student): string;
}
