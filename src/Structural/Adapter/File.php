<?php

namespace App\Structural\Adapter;

final readonly class File
{
    public function __construct(private string $name, private string $content)
    {
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
