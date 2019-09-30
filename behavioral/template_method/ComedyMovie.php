<?php

namespace behavioral\template_method;

class ComedyMovie extends Movie {

    const AVAILABLE_DIRECTORS = ['Edgar Wright', 'Kevin Smith'];
    const AVAILABLE_ACTORS = ['Jim Carrey', 'Eddie Murphy', 'Steve Carell'];
    const NUM_ROLES = 2;

    protected function raiseMoney () {
        $this->budget = 500000;
    }

    protected function castActors () {
        $this->cast[] = 'Adam Sandler';
        $this->cast[] = self::AVAILABLE_ACTORS[array_rand(self::AVAILABLE_ACTORS)];
    }

    protected function castDirector () {
        $this->director = self::AVAILABLE_DIRECTORS[array_rand(self::AVAILABLE_DIRECTORS)];
    }
}