<?php

namespace behavioral\state;

class Angry extends Mood {

    public function insult (Person $context) {
        $context->say("You too...");
    }

    public function hug (Person $context) {
        $context->say("Hm...");
        $context->setState(new Neutral());
    }

    public function getName (Person $context, string $name) {
        $context->say("{$name}. What's your problem?");
    }

}