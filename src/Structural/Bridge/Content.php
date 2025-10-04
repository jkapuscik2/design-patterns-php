<?php
declare(strict_types=1);

namespace App\Structural\Bridge;

abstract readonly class Content
{
    public function __construct(protected string $filePath)
    {
    }

    abstract public function getHtml(): string;

    abstract public function getCss(): string;

}
