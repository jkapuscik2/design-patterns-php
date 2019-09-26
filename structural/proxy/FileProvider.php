<?php

namespace structural\proxy;

class FileProvider implements File {

    public function add (string $name, string $path): void {
        echo "File {$name} from {$path} was added to storage" . PHP_EOL;
    }

    public function get (string $name): void {
        echo "File {$name} was downloaded from storage" . PHP_EOL;
    }

    public function remove (string $name): void {
        echo "File {$name} was removed from storage" . PHP_EOL;
    }
}