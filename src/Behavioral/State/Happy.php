<?php

namespace App\Behavioral\State;

class Happy extends Mood
{
    public function insult(Person $context): void
    {
        $context->say("Oh! That wasn't nice");
        $context->setState(new Neutral());
    }

    public function hug(Person $context): void
    {
        $context->say("Oh! That was nice, thanks");
    }

    public function getName(Person $context, string $name): void
    {
        $context->say("Oh! Hello dear friend. My name is {$name}");
    }
}
