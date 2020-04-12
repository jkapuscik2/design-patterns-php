<?php

namespace Behavioral\Visitor;

interface Visitable
{
    public function accept(Visitor $visitor);
}