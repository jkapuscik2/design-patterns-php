<?php
declare(strict_types=1);

namespace App\Structural\Bridge;

final readonly class Image extends Content
{
    public function getCss(): string
    {
        return <<<IMG
		.content {
			width: 100%;
			border-style: dotted dashed solid double; 
			border-radius: 50px;
		}
IMG;
    }

    public function getHtml(): string
    {
        return "<img class='content' src='$this->filePath' />";
    }
}
