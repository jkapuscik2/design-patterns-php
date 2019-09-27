<?php

namespace behavioral\state;

class Angry extends Mood {

    public function insult () {
        $this->context->say("You too...");
    }

    public function hug () {
        $this->context->say("Hm...");
        $this->context->setState(new Neutral());
    }

    public function getName (string $name) {
        $this->context->say("{$name}. What's your problem?");
    }

}