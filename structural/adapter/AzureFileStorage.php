<?php

namespace structural\adapter;

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;
use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;

class AzureFileStorage implements FileAdapter {

    private $client;
    private $containerName;

    public function __construct () {
        $connectionString = "DefaultEndpointsProtocol=https;AccountName=" . Config::AZURE['account_name'] . ";AccountKey=" . Config::AZURE["account_key"] . ";EndpointSuffix=core.windows.net";
        $this->client = BlobRestProxy::createBlobService($connectionString);
        $this->containerName = Config::AZURE['container_name'];
        $this->createContainer();
    }

    protected function createContainer () {
        $createContainerOptions = new CreateContainerOptions();
        $createContainerOptions->setPublicAccess(PublicAccessType::CONTAINER_AND_BLOBS);

        try {
            $this->client->createContainer($this->containerName, $createContainerOptions);
        } catch (ServiceException $e) {
            echo "Container '{$this->containerName}' already exist";
        }
    }

    public function get (string $path): File {
        $blob = $this->client->getBlob($this->containerName, $path);

        return new File($path, stream_get_contents($blob->getContentStream()));
    }

    public function save (string $path): void {
        $this->client->createBlockBlob($this->containerName, $path, fopen($path, "r"));
    }

    public function delete (string $path): void {
        $this->client->deleteBlob($this->containerName, $path);
    }
}