<?php

namespace behavioral\state;

class Happy extends Mood {

    public function insult () {
        $this->context->say("Oh! That wasn't nice");
        $this->context->setState(new Neutral());
    }

    public function hug () {
        $this->context->say("Oh! That was nice, thanks");
    }

    public function getName (string $name) {
        $this->context->say("Oh! Hello dear friend. My name is {$name}");
    }
}