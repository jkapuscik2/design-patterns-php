<?php
declare(strict_types=1);

namespace App\Structural\Adapter;

class LocalFileStorage implements FileAdapter
{
    public const STORAGE_PATH = "storage" . DIRECTORY_SEPARATOR;

    /**
     * @throws \Exception
     */
    public function get(string $name): File
    {
        $fullPath = self::STORAGE_PATH . $name;

        if (file_exists($fullPath)) {
            return new File($name, file_get_contents($fullPath));
        } else {
            throw new \Exception("File {$fullPath} does not exist in local storage");
        }
    }

    public function save(string $path, string $name): void
    {
        $contents = file_get_contents($path);
        if ($contents === false) {
            throw new \RuntimeException("Failed to read source file: {$path}");
        }
        if (@file_put_contents(self::STORAGE_PATH . $name, $contents) === false) {
            throw new \RuntimeException("Failed to write file: " . self::STORAGE_PATH . $name);
        }
    }

    public function delete(string $path): bool
    {
        return @unlink(self::STORAGE_PATH . $path);
    }
}
