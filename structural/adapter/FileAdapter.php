<?php

namespace structural\adapter;

interface FileAdapter {

    public function get (string $path): File;

    public function save (string $path, string $name): void;

    public function delete (string $name): void;
}