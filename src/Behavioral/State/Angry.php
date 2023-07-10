<?php

namespace App\Behavioral\State;

class Angry extends Mood
{
    public function insult(Person $context): void
    {
        $context->say("You too...");
    }

    public function hug(Person $context): void
    {
        $context->say("Hm...");
        $context->setState(new Neutral());
    }

    public function getName(Person $context, string $name): void
    {
        $context->say("{$name}. What's your problem?");
    }

}
