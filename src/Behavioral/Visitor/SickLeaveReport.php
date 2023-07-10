<?php

namespace App\Behavioral\Visitor;

final class SickLeaveReport implements Visitor
{
    public function visitUniversity(University $university): string
    {
        $msg = "Generating sick leave report for: {$university->getName()}" . PHP_EOL;

        foreach ($university->getStudents() as $student) {
            $msg .= $this->visitStudent($student) . PHP_EOL;
        }

        return $msg;
    }

    public function visitStudent(Student $student): string
    {
        $daysMissed = 0;

        foreach ($student->getSickLeaves() as $sickLeave) {
            $daysMissed += $sickLeave->getStart()->diff($sickLeave->getEnd())->days + 1;
        }

        return "Student: {$student->getName()} missed {$daysMissed} days";
    }
}
