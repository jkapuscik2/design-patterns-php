<?php

namespace App\Structural\Adapter;

class Client
{
    private FileAdapter $storageProvider;

    /**
     * @throws \Exception
     */
    public function __construct(string $storage)
    {
        $this->storageProvider = match ($storage) {
            'local' => new LocalFileStorage(),
            'aws' => new AWSFileStorage(),
            default => throw new \Exception("Unsupported storage requested $storage"),
        };
    }

    public function save(string $filePath, string $name): void
    {
        $this->storageProvider->save($filePath, $name);
    }

    public function get(string $name): File
    {
        return $this->storageProvider->get($name);
    }

    public function delete(string $name)
    {
        return $this->storageProvider->delete($name);
    }
}
