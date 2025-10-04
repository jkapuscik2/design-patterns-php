<?php
declare(strict_types=1);

namespace App\Structural\Adapter;

use Aws\S3\S3Client;
use Aws\Credentials\Credentials;
use Symfony\Component\Dotenv\Dotenv;

class AWSFileStorage implements FileAdapter
{
    private S3Client $client;
    private string $bucket;

    public function __construct()
    {
        $dotenv = new Dotenv();
        $dotenv->load('.env');

        $this->bucket = getenv('AWS_BUCKET_NAME') ?? "";

        $this->client = new S3Client([
            'version' => 'latest',
            'region' => getenv('AWS_REGION'),
            'credentials' => new Credentials(getenv("AWS_ACCESS_KEY_ID"), getenv("AWS_SECRET_ACCESS_KEY"))
        ]);
    }

    public function get(string $name): File
    {
        try {
            $file = $this->client->getObject([
                'Bucket' => $this->bucket,
                'Key' => $name
            ]);

            return new File($name, $file['Body']->getContents());
        } catch (\Throwable $e) {
            throw new \LogicException($e->getMessage());
        }
    }

    public function save(string $path, string $name): void
    {
        $this->client->putObject([
            'Bucket' => $this->bucket,
            'Key' => $name,
            'Body' => file_get_contents($path)
        ]);
    }

    public function delete(string $name): bool
    {
        try {
            $this->client->deleteObject([
                'Bucket' => $this->bucket,
                'Key' => $name
            ]);
        } catch (\Throwable $e) {
            return false;
        }

        return true;
    }
}
