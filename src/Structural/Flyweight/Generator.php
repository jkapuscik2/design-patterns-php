<?php

namespace App\Structural\Flyweight;

class Generator
{
    public const COLUMNS = ["id", "uuid", "location", "resolution", "producer", "operating_system", "ip"];
    public const LOCATIONS = ["Warsaw", "Berlin", "Amsterdam", "Paris"];
    public const RESOLUTIONS = ["Full HD", "4K"];
    public const PRODUCERS = ["LG", "Samsung", "Philips", "Sencor"];
    public const OPERATING_SYSTEMS = ["Linux", "Android", "Ubuntu"];

    private int $numItems;
    private string $fileName;
    private $file;

    public function __construct(string $fileName, int $numItems)
    {
        $this->numItems = $numItems;
        $this->fileName = $fileName;
    }

    protected function createHeader(): void
    {
        fputcsv($this->file, self::COLUMNS);
    }

    protected function generateRandomString(int $length): string
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    protected function getRand(array $arr): string
    {
        $key = array_rand($arr);

        return $arr[$key];
    }

    protected function getRandIp(): string
    {
        return mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);
    }

    protected function generateData(): void
    {
        for ($idx = 0; $idx < $this->numItems; $idx++) {
            fputcsv($this->file, [
                $idx + 1,
                $this->generateRandomString(rand(5, 10)),
                $this->getRand(self::LOCATIONS),
                $this->getRand(self::RESOLUTIONS),
                $this->getRand(self::PRODUCERS),
                $this->getRand(self::OPERATING_SYSTEMS),
                $this->getRandIp()
            ]);
        }
    }

    public function create(): void
    {
        $this->file = fopen($this->fileName, 'w');
        $this->createHeader();
        $this->generateData();
        fclose($this->file);
    }
}

