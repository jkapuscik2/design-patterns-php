<?php

namespace App\Behavioral\State;

class Neutral extends Mood
{
    public function insult(Person $context): void
    {
        $context->say("What the heck do you want?");
        $context->setState(new Angry());
    }

    public function hug(Person $context): void
    {
        $context->say("Thanks");
        $context->setState(new Happy());
    }

    public function getName(Person $context, string $name): void
    {
        $context->say("My name is {$name}");
    }

}
