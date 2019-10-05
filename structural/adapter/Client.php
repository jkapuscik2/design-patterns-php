<?php

namespace structural\adapter;

class Client {

    private $storageProvider;

    public function __construct (string $storage) {
        switch ($storage) {
            case 'local':
                $this->storageProvider = new LocalFileStorage();
                break;
            case 'azure':
                $this->storageProvider = new AzureFileStorage();
                break;
            case 'aws':
                $this->storageProvider = new AWSFileStorage();
                break;
            default:
                throw new \Exception("Unsupported storage requested $storage");
        }
    }

    public function save (string $filePath, string $name) {
        $this->storageProvider->save($filePath, $name);
    }

    public function get (string $name) {
        return $this->storageProvider->get($name);
    }

    public function delete (string $name) {
        return $this->storageProvider->delete($name);
    }
}