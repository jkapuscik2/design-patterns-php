<?php
declare(strict_types=1);

namespace App\Creational\FactoryMethod;

final readonly class FileItem
{
    public function __construct(
        private FileType $type,
        private string $filePath
    ) {
    }

    public function getType(): FileType
    {
        return $this->type;
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }
}
