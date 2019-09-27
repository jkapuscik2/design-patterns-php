<?php

namespace behavioral\state;

abstract class Mood {

    protected $context;

    public function setContext (Person $context) {
        $this->context = $context;
    }

    public abstract function insult ();

    public abstract function hug ();

    public abstract function getName (string $name);
}