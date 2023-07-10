<?php

namespace App\Behavioral\TemplateMethod;

class ComedyMovie extends Movie
{
    public const AVAILABLE_DIRECTORS = ['Edgar Wright', 'Kevin Smith'];
    public const AVAILABLE_ACTORS = ['Jim Carrey', 'Eddie Murphy', 'Steve Carell'];

    protected function raiseMoney(): void
    {
        $this->budget = 500000;
    }

    protected function castActors(): void
    {
        $this->cast[] = 'Adam Sandler';
        $this->cast[] = self::AVAILABLE_ACTORS[array_rand(self::AVAILABLE_ACTORS)];
    }

    protected function castDirector(): void
    {
        $this->director = self::AVAILABLE_DIRECTORS[array_rand(self::AVAILABLE_DIRECTORS)];
    }
}
