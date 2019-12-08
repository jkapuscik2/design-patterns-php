<?php

namespace behavioral\visitor;

interface Visitable
{
    public function accept(Visitor $visitor);
}