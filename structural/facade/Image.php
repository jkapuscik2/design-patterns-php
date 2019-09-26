<?php

namespace structural\facade;

use \Imagick;
use \SplFileInfo;

class Image {

    const FILE_THUMBNAIL_WITH = 100;
    const FILE_THUMBNAIL_HEIGHT = 100;

    public function thumbnail ($filePath) {
        $imagick = new Imagick($filePath);

        $imagick->setbackgroundcolor('rgb(0, 0, 0)');
        $imagick->thumbnailImage(self::FILE_THUMBNAIL_WITH, self::FILE_THUMBNAIL_HEIGHT, true, true);

        $fileInfo = new SplFileInfo($filePath);
        $thumbPath = $fileInfo->getBasename('.' . $fileInfo->getExtension()) . '_thumb' . "." . $fileInfo->getExtension();

        if (file_put_contents($thumbPath, $imagick)) {
            return true;
        } else {
            throw new \Exception("Could not create thumbnail.");
        }
    }
}
