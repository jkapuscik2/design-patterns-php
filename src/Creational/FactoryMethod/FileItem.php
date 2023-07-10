<?php

namespace App\Creational\FactoryMethod;

final readonly class FileItem
{
    public const TYPE_IMG = 'image';
    public const TYPE_VIDEO = 'video';
    public const TYPE_AUDIO = 'audio';

    public function __construct(
        private string $type,
        private string $filePath
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }
}
