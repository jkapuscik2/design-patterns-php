<?php

namespace behavioral\state;

class Person {

    private $currentMood;
    private $name;

    public function __construct (Mood $mood, string $name) {
        $this->setState($mood);
        $this->name = $name;
    }

    public function setState (Mood $mood) {
        $this->currentMood = $mood;
    }

    public function insult () {
        $this->currentMood->insult($this);
    }

    public function getName () {
        $this->currentMood->getName($this, $this->name);
    }

    public function hug () {
        $this->currentMood->hug($this);
    }

    public function say (string $msg) {
        echo($msg . PHP_EOL);
    }
}