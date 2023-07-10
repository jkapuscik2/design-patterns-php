<?php

namespace App\Behavioral\Visitor;

interface Visitable
{
    public function accept(Visitor $visitor): string;
}
