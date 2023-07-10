<?php

namespace App\Behavioral\State;

abstract class Mood
{
    abstract public function insult(Person $context): void;

    abstract public function hug(Person $context): void;

    abstract public function getName(Person $context, string $name): void;
}
