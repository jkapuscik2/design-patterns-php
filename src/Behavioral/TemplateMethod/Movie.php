<?php
declare(strict_types=1);

namespace App\Behavioral\TemplateMethod;

abstract class Movie
{
    protected string $name;
    protected int $budget;
    protected array $cast = [];
    protected string $director;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    final public function publish(): void
    {
        $this->raiseMoney();
        $this->castActors();
        $this->castDirector();
        $this->promote();
    }

    abstract protected function raiseMoney(): void;

    abstract protected function castActors(): void;

    abstract protected function castDirector(): void;

    protected function promote(): void
    {
        $actors = implode(", ", $this->cast);
        echo "New movie '{$this->name}' directed by {$this->director}. Starring {$actors} and budget of \${$this->budget}!" . PHP_EOL;
    }
}
