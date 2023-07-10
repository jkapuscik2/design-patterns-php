<?php

namespace App\Behavioral\State;

class Person
{
    private Mood $currentMood;
    private string $name;

    public function __construct(Mood $mood, string $name)
    {
        $this->setState($mood);
        $this->name = $name;
    }

    public function setState(Mood $mood): void
    {
        $this->currentMood = $mood;
    }

    public function insult(): void
    {
        $this->currentMood->insult($this);
    }

    public function getName(): void
    {
        $this->currentMood->getName($this, $this->name);
    }

    public function hug(): void
    {
        $this->currentMood->hug($this);
    }

    public function say(string $msg): void
    {
        echo($msg . PHP_EOL);
    }
}
