<?php

namespace App\Behavioral\TemplateMethod;

class ActionMovie extends Movie
{
    public const AVAILABLE_DIRECTORS = ['Michael Bay', 'James Cameron', 'Steven Spielberg'];
    public const AVAILABLE_ACTORS = ['Sylvester Stallone', 'Bruce Willis', 'Al Pacino', 'Arnold Schwarzenegger'];
    public const NUM_ROLES = 2;

    protected function raiseMoney(): void
    {
        $this->budget = 100000;
    }

    protected function castActors(): void
    {
        foreach (array_rand(self::AVAILABLE_ACTORS, self::NUM_ROLES) as $actor) {
            $this->cast[] = self::AVAILABLE_ACTORS[$actor];
        }
    }

    protected function castDirector(): void
    {
        $this->director = self::AVAILABLE_DIRECTORS[array_rand(self::AVAILABLE_DIRECTORS)];
    }
}
