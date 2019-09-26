<?php

namespace structural\adapter;

class LocalFileStorage implements FileAdapter {

    const STORAGE_PATH = "structural" . DIRECTORY_SEPARATOR . "adapter" . DIRECTORY_SEPARATOR . "storage" . DIRECTORY_SEPARATOR;

    public function get (string $path): File {
        $fullPath = STORAGE_PATH . $path;

        if (file_exists($fullPath)) {
            return new File($path, file_get_contents($fullPath));
        } else {
            throw new \Exception("File {$fullPath} does not exist");
        }
    }

    public function save (string $path): void {
        copy($path, STORAGE_PATH . $path);
    }

    public function delete (string $path): void {
        unlink(STORAGE_PATH . $path);
    }
}