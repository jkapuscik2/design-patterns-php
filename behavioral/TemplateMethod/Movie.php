<?php

namespace Behavioral\TemplateMethod;

abstract class Movie {

    protected $name;
    protected $budget;
    protected $cast = [];
    protected $director;

    public function __construct (string $name) {
        $this->name = $name;
    }

    public final function publish () {
        $this->raiseMoney();
        $this->castActors();
        $this->castDirector();
        $this->promote();
    }

    abstract protected function raiseMoney ();

    abstract protected function castActors ();

    abstract protected function castDirector ();

    protected function promote () {
        $actors = implode(", ", $this->cast);
        echo "New movie '{$this->name}' directed by {$this->director}. Starring {$actors} and budget of \${$this->budget}!" . PHP_EOL;
    }
}