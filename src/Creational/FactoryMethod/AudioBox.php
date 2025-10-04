<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

class AudioBox extends Box
{
    public function getHtml(): string
    {
        $src = htmlspecialchars($this->file->getFilePath(), ENT_QUOTES, 'UTF-8');
        return "<audio controls src='{$src}' />";
    }
}
