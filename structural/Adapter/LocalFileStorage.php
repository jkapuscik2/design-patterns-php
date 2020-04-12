<?php

namespace Structural\Adapter;


class LocalFileStorage implements FileAdapter {

    const STORAGE_PATH = "storage" . DIRECTORY_SEPARATOR;

    public function get (string $name): File {
        $fullPath = self::STORAGE_PATH . $name;

        if (file_exists($fullPath)) {
            return new File($name, file_get_contents($fullPath));
        } else {
            throw new \Exception("File {$fullPath} does not exist in local storage");
        }
    }

    public function save (string $path, string $name): void {
        move_uploaded_file($path, self::STORAGE_PATH . $name);
    }

    public function delete (string $path): void {
        unlink(self::STORAGE_PATH . $path);
    }
}