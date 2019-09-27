<?php

namespace behavioral\state;

class Neutral extends Mood {

    public function insult () {
        $this->context->say("What the heck do you want?");
        $this->context->setState(new Angry());
    }

    public function hug () {
        $this->context->say("Thanks");
        $this->context->setState(new Happy());
    }

    public function getName (string $name) {
        $this->context->say("My name is {$name}");
    }

}