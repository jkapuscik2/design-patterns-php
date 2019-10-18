<?php

namespace behavioral\state;

class Happy extends Mood {

    public function insult (Person $context) {
        $context->say("Oh! That wasn't nice");
        $context->setState(new Neutral());
    }

    public function hug (Person $context) {
        $context->say("Oh! That was nice, thanks");
    }

    public function getName (Person $context, string $name) {
        $context->say("Oh! Hello dear friend. My name is {$name}");
    }
}