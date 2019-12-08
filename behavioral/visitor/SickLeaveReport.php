<?php

namespace behavioral\visitor;

class SickLeaveReport implements Visitor
{
    public function visitUniversity(University $university): array
    {
        $msgs = [];
        $msgs[] = "Generating sick leave report for: \"{$university->getName()}\"";

        foreach ($university->getStudents() as $student) {
            $msgs[] = $this->visitStudent($student);
        }

        return $msgs;
    }

    public function visitStudent(Student $student): string
    {
        $daysMissed = 0;

        foreach ($student->getSickLeaves() as $sickLeave) {
            $daysMissed = $sickLeave->getStart()->diff($sickLeave->getEnd())->days;
        }

        return "Student: {$student->getName()} missed {$daysMissed} days";
    }
}