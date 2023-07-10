<?php

namespace App\Structural\Facade;

use Imagick;
use SplFileInfo;

class Image
{
    private Imagick $imagick;

    public function __construct()
    {
        $this->imagick = new Imagick();
    }

    public function thumbnail(string $filePath, int $width, int $height): true
    {
        $this->imagick->readImage($filePath);
        $this->imagick->setbackgroundcolor('rgb(0, 0, 0)');
        $this->imagick->thumbnailImage($width, $height, true, true);

        $fileInfo = new SplFileInfo($filePath);
        $thumbPath = $fileInfo->getBasename('.' . $fileInfo->getExtension()) . '_thumb' . "." . $fileInfo->getExtension();

        if (file_put_contents($thumbPath, $this->imagick)) {
            return true;
        } else {
            throw new \RuntimeException("Could not create thumbnail.");
        }
    }
}
