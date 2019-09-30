<?php

namespace behavioral\template_method;

class ActionMovie extends Movie {

    const AVAILABLE_DIRECTORS = ['Michael Bay', 'James Cameron', 'Steven Spielberg'];
    const AVAILABLE_ACTORS = ['Sylvester Stallone', 'Bruce Willis', 'Al Pacino', 'Arnold Schwarzenegger'];
    const NUM_ROLES = 2;

    protected function raiseMoney () {
        $this->budget = 100000;
    }

    protected function castActors () {
        foreach (array_rand(self::AVAILABLE_ACTORS, self::NUM_ROLES) as $actor) {
            $this->cast[] = self::AVAILABLE_ACTORS[$actor];
        }
    }

    protected function castDirector () {
        $this->director = self::AVAILABLE_DIRECTORS[array_rand(self::AVAILABLE_DIRECTORS)];
    }
}